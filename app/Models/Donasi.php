<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = 'tb_donasi';

	protected $fillable = [
        'created_at', 'update_at', 'donatur_id', 'penerima_id', 'alamat', 'value'
    ];

    public function penerima(){
        return $this->belongsTo('App\Models\Penerima','penerima_id','id');
    }
}
