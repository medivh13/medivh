<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'laundrys';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude',
        'avatar',
        'image'
    ];

    public function getAvatarAttribute()
    {
        return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->name));
    }

    public function getImageAttribute()
    {
        return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->name));
    }
}
