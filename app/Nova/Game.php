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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
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
                        ->withMeta(['value' => $pt_title ?? NULL])
                        ->rules('required', 'max:255')
                        ->hideFromIndex(),
                    TextArea::make('Teaser', EntityFields::TEASER . '_pt')
                        ->withMeta(['value' => $pt_teaser ?? NULL])
                        ->rules('required')
                        ->help('The teaser is displayed on the main page.'),

                    NovaTinyMCE::make('Description', EntityFields::DESCRIPTION . '_pt')
                        ->withMeta(['value' => $pt_description ?? NULL])
                        ->options(self::editorOptions(320))
                        ->hideFromIndex()
                        ->onlyOnForms()
                        ->rules('required'),
                    Text::make('Genre', EntityFields::GENRE . '_pt')
                        ->withMeta(['value' => $pt_genre ?? NULL])
                        ->hideFromIndex(),

                ]),
                Tab::make(Languages::EN_FULL, [
                    Text::make('Title', EntityFields::TITLE . '_en')
                        ->withMeta(['value' => $eng_title ?? NULL])
                        ->rules('required', 'max:255'),
                    TextArea::make('Teaser', EntityFields::TEASER . '_en')
                        ->withMeta(['value' => $eng_teaser ?? NULL])
                        ->rules('required')
                        ->help('The teaser is displayed on the main page.'),
                    NovaTinyMCE::make('Description', EntityFields::DESCRIPTION . '_en')
                        ->withMeta(['value' => $eng_description ?? NULL])
                        ->options(self::editorOptions(320))
                        ->onlyOnForms()
                        ->rules('required'),
                    Text::make('Genre', EntityFields::GENRE . '_en')
                        ->withMeta(['value' => $eng_genre ?? NULL])
                        ->rules('required'),
                ]),

            ]),
            Images::make('Poster image', MediaNames::GAME_POSTER_IMAGE)
                ->help(__('Valid formats are .jpeg, .png Maximum size: 10 MB.'))
                ->setAllowedFileTypes(['image'])
                ->singleImageRules([new ImageSizeRule(10)])
                ->conversionOnIndexView('teaser')
                ->conversionOnDetailView('teaser')
                ->help('The poster image is displayed on the main page.')
                ->conversionOnForm('teaser'),
            Images::make('Description image', MediaNames::GAME_DESCRIPTION_IMAGE)
                ->help(__('Valid formats are .jpeg, .png Maximum size: 10 MB.'))
                ->setAllowedFileTypes(['image'])
                ->singleImageRules([new ImageSizeRule(10)])
                ->conversionOnIndexView('teaser')
                ->conversionOnDetailView('teaser')
                ->conversionOnForm('teaser')
                ->help('The image is displayed on the game detail page.'),
            Images::make('Gallery Images', MediaNames::GAME_DETAIL_GALLERY)
                ->help(__('Valid formats are .jpeg, .png Maximum size: 10 MB.'))
                ->setAllowedFileTypes(['image'])
                ->singleImageRules([new ImageSizeRule(10)])
                ->conversionOnIndexView('teaser')
                ->conversionOnDetailView('teaser')
                ->conversionOnForm('teaser')
                ->help('The gallery images are displayed on the game detail page.'),
            Text::make('Duration', EntityFields::DURATION)
                ->rules('required'),
            Text::make('Players', EntityFields::PLAYERS)
                ->rules('required'),
            Text::make('Age', EntityFields::AGE)
                ->rules('required'),
            Text::make('Trailer link', EntityFields::TRAILER_LINK)
                ->rules('required'),
            Number::make('Weight', EntityFields::WEIGHT)
                ->rules('required')
                ->help('The higher the weight, the lower the FAQ will be displayed on the list.')
                ->default(500),
            Boolean::make('Status', EntityFields::STATUS)
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
}
