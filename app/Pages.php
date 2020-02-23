<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{

    protected $table='pages';

    public function parent(){
        return $this->belongsTo('App\Pages','parent_id');
    }

    public function children(){
        return $this->hasMany('App\Pages', 'parent_id');
    }
}
