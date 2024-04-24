<?php

namespace App\Nova;

use App\Constants\EntityFields;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Metatag extends Resource {
    /**
     * The model the resource corresponds to.
     * @var class-string<\App\Models\Metatag>
     */
    public static $model = \App\Models\Metatag::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return array
     */
    public function fields(NovaRequest $request) {

        return [
            ID::make()
                ->sortable(),
            Text::make('URL', EntityFields::URI)
                ->rules('required', 'max:255')
                ->help('The URL field should be the relative path of the page. For example, if the page is located at https://vr-arena.pt/en/about, the URL field should be en/about.')
                ->creationRules([
                    'unique:metatags,uri',
                    'required' => 'The URL field is required for new metatags.',
                    'max' => 'The URL field must not exceed 255 characters.',
                    'unique' => 'The URL has already been taken by another metatag.',
                ])
                ->updateRules([
                    'unique:metatags,uri,{{resourceId}}',
                    'required' => 'The URL field is required for updating metatags.',
                    'max' => 'The URL field must not exceed 255 characters.',
                    'unique' => 'The URL has already been taken by another metatag.',
                ]),
            Text::make('Title', EntityFields::TITLE)
                ->rules('required', 'max:255')
                ->help("It's recommended to keep the title tag between 50-60 characters. This ensures that the full title displays properly in search engine results pages (SERPs) without being truncated."),
            Text::make('Description', EntityFields::DESCRIPTION)
                ->rules('required', 'max:1000')
                ->help('Aim for a meta description length of around 150-160 characters.'),
            Text::make('Keywords', EntityFields::KEYWORDS)
                ->rules('required', 'max:1000')
                ->help("While meta keywords are no longer as influential for SEO, if you choose to include them, keep them relevant and concise. There's no strict length limit, but a few relevant keywords or phrases suffice."),

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
