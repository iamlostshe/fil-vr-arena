<?php

namespace App\Nova;

use App\Constants\EntityFields;
use App\Constants\Languages;
use App\Constants\MediaNames;
use App\Rules\ImageSizeRule;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\Traits\HasTabs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Game extends Resource {
    use HasTabs;

    /**
     * The game the resource corresponds to.
     * @var class-string<\App\Models\Game>
     */
    public static $model = \App\Models\Game::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     * @var string
     */
    public static $title = EntityFields::TITLE;

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return array
     */
    public function fields(NovaRequest $request) {

        $isCreate = $request->isCreateOrAttachRequest();
        if (!$isCreate) {
            $this->model()
                ->setLanguage('en');
            $eng_title = $this->title;
            $eng_teaser = $this->teaser;
            $eng_description = $this->description;
            $eng_genre = $this->genre;
            $this->model()
                ->setLanguage('pt');
            $pt_title = $this->title;
            $pt_teaser = $this->teaser;
            $pt_description = $this->description;
            $pt_genre = $this->genre;
        }

        return [
            ID::make(EntityFields::ID),
            Tabs::make(Languages::EN_FULL, [
                Tab::make(Languages::PT_FULL, [
                    Text::make('Title', EntityFields::TITLE . '_pt')
                        ->help('The title is displayed on the main page.')
                        ->withMeta(['value' => $pt_title ?? NULL])
                        ->rules('required', 'max:255')
                        ->hideFromIndex(),
                    TextArea::make('Teaser', EntityFields::TEASER . '_pt')
                        ->help('The teaser is a short description of the game.')
                        ->withMeta(['value' => $pt_teaser ?? NULL])
                        ->rules('required')
                        ->help('The teaser is displayed on the main page.'),

                    NovaTinyMCE::make('Description', EntityFields::DESCRIPTION . '_pt')
                        ->help('The description is displayed on the game page.')
                        ->withMeta(['value' => $pt_description ?? NULL])
                        ->options(self::editorOptions(320))
                        ->hideFromIndex()
                        ->onlyOnForms()
                        ->rules('required'),
                    Text::make('Genre', EntityFields::GENRE . '_pt')
                        ->help('The genre is displayed on the game page and on the main page.')
                        ->withMeta(['value' => $pt_genre ?? NULL])
                        ->hideFromIndex(),

                ]),
                Tab::make(Languages::EN_FULL, [
                    Text::make('Title', EntityFields::TITLE . '_en')
                        ->help('The title is displayed on the main page.')
                        ->withMeta(['value' => $eng_title ?? NULL])
                        ->rules('required', 'max:255'),
                    TextArea::make('Teaser', EntityFields::TEASER . '_en')
                        ->help('The teaser is a short description of the game.')
                        ->withMeta(['value' => $eng_teaser ?? NULL])
                        ->rules('required')
                        ->help('The teaser is displayed on the main page.'),
                    NovaTinyMCE::make('Description', EntityFields::DESCRIPTION . '_en')
                        ->help('The description is displayed on the game page.')
                        ->withMeta(['value' => $eng_description ?? NULL])
                        ->options(self::editorOptions(320))
                        ->onlyOnForms()
                        ->rules('required'),
                    Text::make('Genre', EntityFields::GENRE . '_en')
                        ->help('The genre is displayed on the game page and on the main page.')
                        ->withMeta(['value' => $eng_genre ?? NULL])
                        ->rules('required'),
                ]),

            ]),
            Images::make('Poster image', MediaNames::GAME_POSTER_IMAGE)
                ->help(__('Main image of the game.<br>Valid formats are .jpeg, .png Maximum size: 10 MB.'))
                ->setAllowedFileTypes(['image'])
                ->singleImageRules([new ImageSizeRule(10)])
                ->conversionOnIndexView('teaser')
                ->conversionOnDetailView('teaser')
                ->conversionOnForm('teaser'),
            Images::make('Description image', MediaNames::GAME_DESCRIPTION_IMAGE)
                ->help(__('Description image shows on the game page.<br>Valid formats are .jpeg, .png Maximum size: 10 MB.'))
                ->setAllowedFileTypes(['image'])
                ->singleImageRules([new ImageSizeRule(10)])
                ->conversionOnIndexView('teaser')
                ->conversionOnDetailView('teaser')
                ->conversionOnForm('teaser'),
            Images::make('Gallery Images', MediaNames::GAME_DETAIL_GALLERY)
                ->help(__('Images of the gallery on game page.<br>Valid formats are .jpeg, .png Maximum size: 10 MB.'))
                ->setAllowedFileTypes(['image'])
                ->singleImageRules([new ImageSizeRule(10)])
                ->conversionOnIndexView('teaser')
                ->conversionOnDetailView('teaser')
                ->conversionOnForm('teaser'),
            Select::make('Duration', EntityFields::DURATION)
                ->help('The duration of the game.')
                ->options([
                    '30 min' => '30 min',
                    '60 min' => '60 min',
                ])
                ->rules('required'),
            Text::make('Players', EntityFields::PLAYERS)
                ->help('The number of players that can play the game at the same time.')
                ->rules('required'),
            Text::make('Age', EntityFields::AGE)
                ->help('The recommended age for the game.')
                ->rules('required'),
            Text::make('Trailer link', EntityFields::TRAILER_LINK)
                ->help('The youtube link to the trailer of the game.<br>The link should be in the embed format: https://www.youtube.com/embed/VIDEO_ID')
                ->rules('required'),
            Number::make('Weight', EntityFields::WEIGHT)
                ->help('The higher the weight, the lower the game will be displayed on the list.')
                ->rules('required')
                ->help('The higher the weight, the lower the FAQ will be displayed on the list.')
                ->default(500),
            Boolean::make('Status', EntityFields::STATUS)
                ->help('The status of the game.')
                ->rules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return array
     */
    public function cards(NovaRequest $request) {

        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return array
     */
    public function filters(NovaRequest $request) {

        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return array
     */
    public function lenses(NovaRequest $request) {

        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return array
     */
    public function actions(NovaRequest $request) {

        return [];
    }

    /**
     * @param Request $request
     *
     * @return false
     */
    public function authorizedToReplicate(Request $request) {

        return FALSE;
    }
}
