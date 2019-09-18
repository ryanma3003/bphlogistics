<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_tag extends Model {

	protected $table = 'blog_tag';
	public $timestamps = false;
	protected $fillable = array('name', 'slug');

	public function tag()
	{
		return $this->hasOne('App\Blog_post_tag', 'tag_id');
	}

}