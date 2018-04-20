<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function team()
    {
        return $this->hasMany('App\Team');
    }
}
