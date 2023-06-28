<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linhvuc extends Model
{
    use HasFactory;
    public function imageUrl()
    {
        return '/storage/'.$this->image;
    }
}
