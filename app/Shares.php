<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shares extends Model
{

    /*  PAYLAŞIMI YAPAN KİŞİ   */
    public function user(){

        return $this->belongsTo('App\User');
    }
    public function categoryDetail(){

        return $this->belongsTo('App\Categories', 'category', 'id');
    }
    public function comments(){

        return $this->hasMany('App\Comment');
    }
    public function likes(){
        return $this->hasMany('App\Likes');
    }
}
