<?php

namespace App\Nova;

use App\Nova\Actions\DoStuff;
use App\Nova\Filters\ProjectCategory;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
        'description'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->rules('required', 'max:40'),
            Text::make('Description')->rules('required', 'max:240'),
            Select::make('Category')
                ->options([
                    'science' => 'Science',
                    'technology' => 'Technology',
                    'finance' => 'Finance'
                ])
                ->displayUsingLabels()
                ->rules('required', 'max:240'),
            Image::make('Cover image')
            ->rules('required', 'sometimes'),
            Trix::make('Content', 'content_trix')
                ->withFiles('public')
                ->rules('required'),
            Markdown::make('Content', 'content_md')
                ->rules('required'),
            File::make('Document'),
            // Waiting for solving an issue
//            Images::make('Gallery', 'project_gallery'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [
            new ProjectCategory,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
//        $u$user->notify(
//        \Laravel\Nova\Notifications\NovaNotification::make()
//            ->message('Your report is ready to download.')
//            ->action('Download', \Laravel\Nova\URL::remote('https://example.com/report.pdf'))
//            ->icon('download')
//            ->type('info')
//    );
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            (new DoStuff)->showInline(),
//            new DoStuff,
        ];
    }
}
