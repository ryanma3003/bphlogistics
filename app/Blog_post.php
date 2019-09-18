<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Blog_categories;
use App\Blog_post_tag;
use App\Blog_tag;


class Blog_post extends Model {

	protected $table = 'blog_post';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('title', 'slug', 'description', 'content', 'image', 'category_id');

	public function blog_post()
	{
		return $this->belongsTo('App\Blog_post_tag', 'post_id');
	}

	public function blog_categories()
	{
		return $this->belongsTo('App\Blog_categories', 'category_id');
	}

}