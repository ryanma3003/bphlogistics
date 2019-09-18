<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_categories extends Model {

	protected $table = 'blog_categories';
	public $timestamps = false;
	protected $fillable = array('name', 'slug', 'description');

	public function categories()
	{
		return $this->hasMany('App\Blog_post', 'category_id');
	}

}