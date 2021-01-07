<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Get user
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	 // Get comments
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
