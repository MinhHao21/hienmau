<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;
    public function Danhmuc()
    {
        return $this->belongsTo(Loaidanhmuc::class);
    }
    public function disannghethuat()
    {
        return $this->belongsTo(Disannghethuat::class);
    }
    public function sangtac()
    {
        return $this->belongsTo(Nghesynghenhan::class);
    }
    public function caulacbo()
    {
        return $this->belongsTo(Caulacbo::class);
    }
}
