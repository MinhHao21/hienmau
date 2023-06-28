<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class Tochuc extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Tochuc::class;

    public static function label()
    {
        return 'Tổ chức';
    }

    public static function singularLabel()
    {
        return 'Tổ chức';
    }

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
            Image::make('Hình ảnh', 'thumbnail'),
            Select::make('Phòng ban', 'phongban_id')->options(
                \App\Models\Phongban::pluck('name', 'id'))->displayUsingLabels(),
            Text::make('Tên tổ chức', 'name')->rules('required'),
            Slug::make('Slug')->from('name')->rules('required')->hideFromIndex(),
            Text::make('Email', 'email')->rules('required'),
            Text::make('Điện thoại', 'dienthoai')->rules('required'),
            Text::make('Chức vụ', 'chucvu')->rules('required'),
            Textarea::make('Nội dung', 'noidung')->hideFromIndex(),
            Text::make('Chức danh', 'chucdanh')->rules('required'),
            Text::make('Thứ tự hiện thị', 'thutu')->rules('required'),
            Boolean::make('Hiển thị', 'hienthi')->default(True),
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
