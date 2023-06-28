<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;
use ZiffMedia\NovaSelectPlus\SelectPlus;
use Mayviet\Fileupload\Fileupload;


class Audio extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Audio::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

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
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Select::make('Cấp trên', 'danhmuc_id')->options(
                \App\Models\Danhmuc::pluck('name', 'id'))->displayUsingLabels(),

            Image::make('Hình đại diện', 'thumbnail'),
            Text::make('Tên tác phẩm', 'name')->rules('required'),
            Slug::make('Slug')->from('name')->rules('required')->hideFromIndex(),
            Text::make('Nhập link mp3', 'linkmp3')->rules('required'),
            Select::make('Di sản nghê thuật', 'disannghethuat')->options(
                \App\Models\Disannghethuat::pluck('name', 'id'))->displayUsingLabels(),
            Select::make('Sáng tác', 'sangtac')->options(
                \App\Models\Nghesynghenhan::pluck('name', 'id'))->displayUsingLabels(),
            Select::make('Caulacbo', 'caulacbo')->options(
                \App\Models\Caulacbo::pluck('name', 'id'))->displayUsingLabels(),
            Fileupload::make('Upload File','uuid')->upload(['audios'])->hideFromIndex(),

    

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}