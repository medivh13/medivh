<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
	protected $fillable = [
        'title',
        'body',
        'slug',
        'author_id',
        'category_id',
        // 'is_published'
    ];

    public function category(){
        return $this->belongsTo(Category::class); //milik sebuah category
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED');
    }
}
