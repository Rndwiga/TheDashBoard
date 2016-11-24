<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    $guarded = []; //make use of all columns

		public function author()
		{
			//Comment belongs to a user who wrote it
			return $this->belongsTo('App\User', 'from_user');
		}
		public function post()
		{
			//A comment belongs to only one post
			return $this->belongsTo('App\Post', 'on_post');
		}
}
