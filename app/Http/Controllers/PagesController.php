<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($slug)
    {
        $page = Pages::where('slug', $slug)->firstOrFail();
        return view('page', [
            'page' => $page,
        ]);
    }
}
