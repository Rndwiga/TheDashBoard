<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; //restrict columns from modification

		public function comments()
		{
			//a post has many comments
			return $this->hasMany('App\Comment', 'on_post');
		}
		public function author()
		{
			//Post belongs to one author only
			return $this->belongsTo('App\User', 'author_id');
		}
}
