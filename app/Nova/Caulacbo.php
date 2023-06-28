<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Image;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Mayviet\Fileupload\Fileupload;

class Caulacbo extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Caulacbo::class;
    public static function label()
    {
        return 'Câu lạc bộ';
    }

    public static function singularLabel()
    {
        return 'Câu lạc bộ';
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
            Text::make('Tên', 'name')->rules('required'),
            Text::make('Trạng thái', function () {
                if (!$this->published_at) {
                    return '<span style="color: red">Chưa duyệt</span>';
                } else {
                    return '<span style="color: green">Đã duyệt</span>';
                }
            })->asHtml(),
            Slug::make('slug')->from('name')->rules('required')->hideFromIndex(),
            Text::make('Địa chỉ', 'diachi')->rules('required'),
            BelongsTo::make('Địa bàn', 'Diaban', 'App\Nova\Diaban'),
            Text::make('Lượng thành viên', 'luongthanhvien')->rules('required'),
            NovaTinyMCE::make('Quy chế', 'quyche')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '300',
                'image_caption' => true,
                
            ])->stacked()->hideFromIndex(),
            NovaTinyMCE::make('Thành viên', 'thanhvien')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '300',
                'image_caption' => true,
                
            ])->stacked()->hideFromIndex(),
            NovaTinyMCE::make('Lịch sinh hoạt', 'lichsinhhoat')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '300',
                'image_caption' => true,
                
            ])->stacked()->hideFromIndex(),
            Text::make('Lượt xem', 'luotxem')->rules('required'),
            Fileupload::make('Upload File','uuid')->upload(['caulacbos'])->hideFromIndex(),

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
