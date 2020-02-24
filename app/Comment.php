<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table      = 'comment';
    protected $primaryKey = 'id';
    public    $timestamps = false;

    public function post()
    {
        return $this->belongsTo('App\Shares' ,'shares_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
