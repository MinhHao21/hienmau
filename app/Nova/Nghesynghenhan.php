<?php

namespace App\Nova;


use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Image;
use Mayviet\Fileupload\Fileupload;


class Nghesynghenhan extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Nghesynghenhan::class;
    public static function label()
    {
        return 'Nghệ sỹ nghệ nhân';
    }

    public static function singularLabel()
    {
        return 'Nghệ sỹ nghệ nhân';
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
            Select::make('Loại danh mục', 'danhmuc_id')->options(
                \App\Models\Danhmuc::pluck('name', 'id'))->displayUsingLabels(),
            Image::make('Hình đại diện', 'anhdaidien'),
            Text::make('Họ và tên', 'name')->rules('required'),
            Slug::make('slug')->from('name')->rules('required')->hideFromIndex(),
            Text::make('Trạng thái', function () {
                if (!$this->published_at) {
                    return '<span style="color: red">Chưa duyệt</span>';
                } else {
                    return '<span style="color: green">Đã duyệt</span>';
                }
            })->asHtml(),
            Text::make('Năm sinh','namsinh'),
            BelongsTo::make('Địa bàn', 'diaban', 'App\Nova\Diaban'),
            Text::make('Quê quán', 'quequan')->rules('required'),
            Text::make('Địa chỉ', 'diachi')->rules('required'),
            NovaTinyMCE::make('Quá trình công tác', 'quatrinhcongtac')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '300',
                'image_caption' => true,

            ])->stacked()->hideFromIndex(),
            NovaTinyMCE::make('Khen thưởng', 'khenthuong')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '300',
                'image_caption' => true,

            ])->stacked()->hideFromIndex(),
            Fileupload::make('Upload File','uuid')->upload(['nghesynghenhans'])->hideFromIndex(),#
            Text::make('Thứ tự','thutu'),
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
         // user_group_id = 1 dc phep duyet
         if ($request->user()->user_group_id == 1) {
            return [
                new Actions\duyet,
                new Actions\huyduyet,
            ];
        }
        return [];
    }
}
