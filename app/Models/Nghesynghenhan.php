<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nghesynghenhan extends Model
{
    use HasFactory;
    public function Danhmuc()
    {
        return $this->belongsTo(Loaidanhmuc::class);
    }
    public function Diaban()
    {
        return $this->belongsTo(Diaban::class);
    }
    
    protected $casts = [
        'namsinh' => 'date',

    ];
    protected $fillable = [
        'active'
      ];
}
