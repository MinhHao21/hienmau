<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disannghethuat extends Model
{
    use HasFactory;
    public function nghesynghenhan()
    {
        return $this->belongsToMany(Nghesynghenhan::class,'dsnn_nsnn');
    }
    public function nghesythehien()
    {
        return $this->belongsToMany(Nghesynghenhan::class,'dsnt_nn');
    }
    
    public function danhmuccon()
    {
        return $this->belongsTo(Danhmuc::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function nghesynghenhan_id()
    {
        return $this->belongsTo(Nghesynghenhan::class);
    }
    public function nghenhan_thehien()
    {
        return $this->belongsTo(Nghesynghenhan::class);
    }
    protected $fillable = [
        'active'
      ];
}
