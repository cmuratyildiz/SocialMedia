<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citys extends Model
{
    protected $table='citys';

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
}
