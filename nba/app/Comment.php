<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
