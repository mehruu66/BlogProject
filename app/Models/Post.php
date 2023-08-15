<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'yt_iframe',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by'
    ];
   public function category()
   {
    return $this->belongsTo(Category::class, 'category_id', 'id');
   }
   public function user()
   {
    return $this->belongsTo(user::class, 'created_by', 'id');
   }
}
