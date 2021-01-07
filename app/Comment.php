<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     // Get user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     // Get Post
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
