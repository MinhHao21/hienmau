<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quangcao extends Model
{
    use HasFactory;
    public function Vitriquangcao()
    {
        return $this->belongsTo(Vitriquangcao::class);
    }
}
