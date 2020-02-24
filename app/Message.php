<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table      = 'messages';
    protected $primaryKey = 'sender';

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
