<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use DigitalCreative\Filepond\Filepond;
use Mayviet\Fileupload\Fileupload;


class Document extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Document::class;

    /**
     * Get the displayble label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Văn bản';
    }

    public static function singularLabel()
    {
        return 'Văn bản';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'sokyhieu';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'sokyhieu',
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
            //BelongsTo::make('Danh mục', 'danhmuc', 'App\Nova\Danhmuc'),
            Select::make('Danh mục', 'danhmuc_id')->options(
                \App\Models\Danhmuc::pluck('name', 'id'))->displayUsingLabels(),
            BelongsTo::make('DocumentType', 'document_type', 'App\Nova\DocumentType'),
            Text::make('Trạng thái', function () {
                if (!$this->published_at) {
                    return '<span style="color: red">Chưa duyệt</span>';
                } else {
                    return '<span style="color: green">Đã duyệt</span>';
                }
            })->asHtml(),
            Text::make('So ky hieu', 'sokyhieu')->rules('required'),
            Slug::make('Slug')->from('sokyhieu')->rules('required')->hideFromIndex(),
            Textarea::make('Trich yeu', 'trichyeu')->rules('required'),
            Date::make('Ngay ban hanh','ngaybanhanh')->format('DD MMM YYYY'),
            Date::make('Ngay het han','ngayhethan')->format('DD MMM YYYY'),
            Text::make('Nguoi ky','nguoiky')->rules('required'),
            Text::make('Chuc vu','chucvu')->rules('required'),
            Text::make('Co quan ban hanh','coquanbanhanh')->rules('required'),
            // Filepond::make('Đính kèm', 'dinhkem')->multiple()->disk('public', '/dinhkem'),
            Fileupload::make('Upload File','uuid')->upload(['documents'])->hideFromIndex(),

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
