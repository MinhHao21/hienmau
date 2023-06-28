<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use OptimistDigital\MultiselectField\Multiselect;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Select;
use ZiffMedia\NovaSelectPlus\SelectPlus;
use Mayviet\Fileupload\Fileupload;


class Disannghethuat extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Disannghethuat::class;
    public static function label()
    {
        return 'Di sản nghệ thuật';
    }

    public static function singularLabel()
    {
        return 'Di sản nghệ thuật';
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

            Select::make('Cấp trên', 'danhmuc_id')->options(
                \App\Models\Danhmuc::pluck('name', 'id'))->displayUsingLabels(),

            Image::make('Hình đại diện', 'thumbnail'),
            Text::make('Tên tác phẩm', 'name')->rules('required'),
            Slug::make('Slug')->from('name')->rules('required')->hideFromIndex(),
            Text::make('Trạng thái', function () {
                if (!$this->published_at) {
                    return '<span style="color: red">Chưa duyệt</span>';
                } else {
                    return '<span style="color: green">Đã duyệt</span>';
                }
            })->asHtml(),
            Text::make('Nội dung', 'noidung')->rules('required'),
            SelectPlus::make('Nghệ sỹ nghệ nhân', 'nghesynghenhan', Nghesynghenhan::class),
            SelectPlus::make('Nghệ sỹ thể hiện', 'nghesythehien', Nghesynghenhan::class),
            Text::make('Thể hiện', 'thehien')->rules('required'),
            Text::make('Sáng tác', 'sangtac')->rules('required'),
            Text::make('Lời mới', 'loimoi')->rules('required'),
            Text::make('Phối khí', 'phoikhi')->rules('required'),
            Fileupload::make('Upload File','uuid')->upload(['disannghethuats'])->hideFromIndex(),

         
           
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
