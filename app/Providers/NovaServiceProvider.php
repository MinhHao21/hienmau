<?php

namespace App\Providers;

use DigitalCreative\CollapsibleResourceManager\Resources\Group;
use DigitalCreative\CollapsibleResourceManager\Resources\InternalLink;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Silvanite\NovaToolPermissions\NovaToolPermissions;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use EricLagarda\NovaGallery\NovaGallery;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new CollapsibleResourceManager([
                'remember_menu_state' => true,
                'navigation' => [
                    TopLevelResource::make([
                        'label' => 'CMS',
                        'resources' => [
                            Group::make([
                                'label' => 'Cơ sở dữ liệu ',
                                'expanded' => false,
                                'resources' => [
                                    \App\Nova\Video::class,
                                    \App\Nova\Audio::class,
                                    \App\Nova\Thuvienanh::class,
                                    // \App\Nova\Caulacbo::class,
                                    // \App\Nova\Nghesynghenhan::class,
                                    // \App\Nova\Disannghethuat::class,
                                    // \App\Nova\Vitriquangcao::class,
                                    // \App\Nova\Quangcao::class,
                                    \App\Nova\User::class,
                                ]
                            ]),
                            Group::make([
                                'label' => 'Danh mục',
                                'expanded' => false,
                                'resources' => [
                                    \App\Nova\Tochuc::class,
                                    \App\Nova\Phongban::class,
                                    \App\Nova\Loaidanhmuc::class,
                                    \App\Nova\Danhmuc::class,
                                    \App\Nova\Post::class,
                                    \App\Nova\Tag::class,
                                    // \App\Nova\Diaban::class,
                                    \App\Nova\Document::class,
                                    \App\Nova\DocumentType::class,
                               
                                ]
                            ]),
                         
                            Group::make([
                                // 'label' => 'Giao diện',
                                // 'expanded' => false,
                                // 'resources' => [
                                //     \App\Nova\Linhvuc::class,
                                //     \App\Nova\Widget::class,
                                //     InternalLink::make([
                                //         'label' => 'Menu',
                                //         'target' => '_self',
                                //         'path' => '/resources/nova-menus',
                                //     ]),
                                //     \App\Nova\Slider::class,
                                //     \App\Nova\Article::class,
                                // ]
                            ]),
                        ]
                    ]),
                ]
            ]),
            new \OptimistDigital\MenuBuilder\MenuBuilder,
            new NovaGallery,
            new NovaToolPermissions(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
