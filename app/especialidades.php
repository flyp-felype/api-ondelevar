<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidades extends Model
{
    //

    public function oficina(){
        return $this->belongsToMany('App\oficina')->withTimestamps();
    }

    protected $primaryKey = "idespecialidades";
}
