<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
	protected $fillable = [
        'name','slug','order','parent_id'
        // 'is_published'
    ];

    public function posts(){
		return $this->hasMany(Post::class); //category punya banyak post
	}
}
