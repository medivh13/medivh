<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'tb_penerima';

	protected $fillable = [
        'created_at', 'update_at', 'nama', 'alamat','keterangan', 'title', 'needed', 'tgl_akhir'
    ];

    public function getDonasi(){
        return $this->hasMany('App\Models\Donasi','penerima_id','id');
    }

    public function getAvatarAttribute()
    {
    	return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->alamat));
    }
}
