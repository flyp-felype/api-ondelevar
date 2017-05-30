<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oficina extends Model
{
    //
        public function especialidades(){
        return $this->belongsToMany('App\especialidades')->withTimestamps();
    }
    protected $primaryKey = "id";
}
