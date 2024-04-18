<?php

namespace App\Nova;

use App\Constants\EntityFields;
use App\Constants\Languages;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class StaticPage extends Resource {
    /**
     * The model the resource corresponds to.
     * @var class-string<\App\Models\StaticPage>
     */
    public static $model = \App\Models\StaticPage::class;

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

        $isCreate = $request->isCreateOrAttachRequest();
        if (!$isCreate) {
            $this->model()
                ->setLanguage('en');
            $eng_title = $this->title;
            $eng_body = $this->body;
            $this->model()
                ->setLanguage('pt');
            $pt_title = $this->title;
            $pt_body = $this->body;
        }

        return [
            ID::make()
                ->sortable(),
            Text::make('Page Key', EntityFields::PAGE_KEY)
                ->rules('required', 'max:255'),
            Tabs::make(Languages::EN_FULL, [
                Tab::make(Languages::PT_FULL, [
                    Text::make('Title', EntityFields::TITLE_PT)
                        ->withMeta(['value' => $pt_title ?? NULL])
                        ->rules('required', 'max:255'),
                    NovaTinyMCE::make('Body', EntityFields::BODY_PT)
                        ->withMeta(['value' => $pt_body ?? NULL])
                        ->rules('required'),

                ]),
                Tab::make(Languages::EN_FULL, [
                    Text::make('Title', EntityFields::TITLE_EN)
                        ->withMeta(['value' => $eng_title ?? NULL])
                        ->rules('required', 'max:255'),
                    NovaTinyMCE::make('Body', EntityFields::BODY_EN)
                        ->withMeta(['value' => $eng_body ?? NULL])
                        ->rules('required'),
                ]),

            ]),
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
