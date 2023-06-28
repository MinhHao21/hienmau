<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Pages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuHeader = nova_get_menu_by_slug('header');
        $menuFooter = nova_get_menu_by_slug('footer');

        $posts = Post::orderBy('created_at', 'desc')->paginate(1);
        $pages = Pages::orderBy('created_at', 'desc')->get();

        return view('home', [
            'posts' => $posts,
            'pages' => $pages,
            'menuHeader' => $menuHeader,
            'menuFooter' => $menuFooter,
        ]);
    }

    public function contact()
    {

    }
}
