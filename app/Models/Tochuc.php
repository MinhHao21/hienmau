<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tochuc extends Model
{
    use HasFactory;
    public function Phongban()
    {
        return $this->belongsTo(Phongban::class);
    }
}
