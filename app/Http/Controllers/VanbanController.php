<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentCategory;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class VanbanController extends Controller
{
    public function dulieu() {
        $data = DB::connection('pgsql')->table('journalarticle')->first();
        return $data;
    }
}
