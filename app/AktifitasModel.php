<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AktifitasModel extends Model
{
    protected $table = "aktifitas";
    protected $fillable = ['user_id', 'loginTerakhir', 'aktifitasTerakhir'];
    public $timestamps = false;

    // public function pasar()
    // {
    // 	return $this->belongsTo('App\PasarModel');
    // }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
