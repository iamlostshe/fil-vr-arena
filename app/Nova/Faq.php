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
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Faq extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Faq>
     */
    public static $model = \App\Models\Faq::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        $isCreate = $request->isCreateOrAttachRequest();
        if (!$isCreate) {
            $this->model()
                ->setLanguage('en');
            $eng_title = $this->title;
            $eng_description = $this->description;
            $this->model()
                ->setLanguage('pt');
            $pt_title = $this->title;
            $pt_description = $this->description;
        }

        return [
            ID::make(EntityFields::ID),
            Tabs::make('FAQ', [
                Tab::make(Languages::EN_FULL, [
                    Text::make('Title', EntityFields::TITLE . '_en')
                        ->withMeta(['value' => $eng_title ?? NULL])
                        ->rules('required', 'max:255'),
                    NovaTinyMCE::make('Description', EntityFields::DESCRIPTION . '_en')
                        ->withMeta(['value' => $eng_description ?? NULL])
                        ->rules('required'),
                ]),
                Tab::make(Languages::PT_FULL, [
                    Text::make('Title', EntityFields::TITLE . '_pt')
                        ->withMeta(['value' => $pt_title ?? NULL])
                        ->rules('required', 'max:255')
                        ->hideFromIndex(),

                    NovaTinyMCE::make('Description', EntityFields::DESCRIPTION . '_pt')
                        ->withMeta(['value' => $pt_description ?? NULL])
                        ->rules('required'),

                ]),
            ]),
            Number::make('Weight', EntityFields::WEIGHT)
                ->rules('required')
                ->help('The higher the weight, the lower the FAQ will be displayed on the list.')
            ->default(500),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
