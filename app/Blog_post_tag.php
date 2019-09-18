<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Blog_tag;
use App\Http\Blog_post;

class Blog_post_tag extends Model {

	protected $table = 'blog_post_tag';
	public $timestamps = false;
	protected $fillable = array('tag_id', 'post_id');

	public function post_tag()
	{
		return $this->belongsToMany('App\Blog_post', 'post_id');
	}

	public function tag_id()
	{
		return $this->belongsToMany('App\Blog_tag', 'tag_id');
	}

}