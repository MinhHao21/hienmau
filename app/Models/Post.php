<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The roles that belong to the user.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tenVietHoa()
    {
        return strtoupper($this->title);
    }
    public function danhmuc()
    {
        return $this->belongsTo(danhmuc::class);
    }

    public function nghesynghenhan()
    {
        return $this->belongsToMany(Nghesynghenhan::class,'nghesynghenhan_post');
    }
    
    public function tacpham()
    {
        return $this->belongsTo(Tacpham::class);
    }
    public function disannghethuat()
    {
        return $this->belongsToMany(Disannghethuat::class,'disannghethuat_post');
    }
    public function caulacbo()
    {
        return $this->belongsToMany(Caulacbo::class,'caulacbo_post');
    }
    protected $fillable = [
        'active'
      ];
    protected $casts = [
        'danhmuc_id'=> 'array',
        'published_at'=> 'date',

    ];
}
