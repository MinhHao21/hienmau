<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function danhmuc()
    {
        return $this->belongsTo(danhmuc::class);
    }

    public function video_category()
    {
        return $this->belongsTo(VideoCategory::class);
    }
}
