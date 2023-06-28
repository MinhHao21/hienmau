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
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use ZiffMedia\NovaSelectPlus\SelectPlus;
use Laravel\Nova\Fields\Select;
use Mayviet\Fileupload\Fileupload;
use Mayviet\Selecttree\Selecttree;


use PhoenixLib\NestedTreeAttachMany\NestedTreeAttachManyField;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * Get the displayble label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Bài viết';
    }

    public static function singularLabel()
    {
        return 'Bài viết';
    }

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
        'title',
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
            // Selecttree::make('Loại danh mục','danhmuc_id')->api(['/danh-muc'])->hideFromIndex(),
            // BelongsTo::make('Loại danh mục', 'danhmuc', 'App\Nova\Danhmuc'),
            Image::make('Hình đại diện', 'thumbnail'),
            Text::make('Tiêu đề', 'title')->rules('required'),
            Slug::make('Slug')->from('Title')->rules('required')->hideFromIndex(),
            Text::make('Trạng thái', function () {
                if (!$this->published_at) {
                    return '<span style="color: red">Chưa duyệt</span>';
                } else {
                    return '<span style="color: green">Đã duyệt</span>';
                }
            })->asHtml(),
            Select::make('Nổi bật', 'noibat')
            ->options([
                1 => 'Nổi bật',
                2 => 'Không nổi bật',
            ]),
            Textarea::make('Mô tả ngắn', 'excerpt'),
            NovaTinyMCE::make('Nội dung', 'content')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '700',
                'image_caption' => true,
                'plugins' => 'link code | table | image',
                'toolbar' => ' undo redo | styleselect | bold italic forecolor backcolor |  alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link | code'

            ])->stacked()->hideFromIndex(),
            // BelongsTo::make('Nghệ sỹ nghệ nhân', 'nghesynghenhan', 'App\Nova\Nghesynghenhan'),
            // SelectPlus::make('Nghệ sỹ nghệ nhân', 'nghesynghenhan', Nghesynghenhan::class),
            // BelongsTo::make('Tác phẩm', 'tacpham', 'App\Nova\Tacpham'),
            // SelectPlus::make('Di sản nghệ thuật', 'disannghethuat', Disannghethuat::class),
            // BelongsTo::make('Di sản nghệ thuật', 'disannghethuat', 'App\Nova\Disannghethuat'),
            // SelectPlus::make('Câu lạc bộ', 'caulacbo', Caulacbo::class),
            // BelongsTo::make('Câu lạc bộ', 'caulacbo', 'App\Nova\Caulacbo'),
            Heading::make('SEO')->hideFromIndex(),
            Text::make('Tiêu đề SEO', 'seo_title')->hideFromIndex(),
            Textarea::make('Mô tả SEO', 'seo_description')->hideFromIndex(),
            Image::make('Hình ảnh SEO', 'seo_image')->hideFromIndex(),
            Fileupload::make('Upload File','uuid')->upload(['posts'])->hideFromIndex(),
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
