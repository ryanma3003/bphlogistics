<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogTagTable extends Migration {

	public function up()
	{
		Schema::create('blog_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
			$table->string('slug', 250);
		});
	}

	public function down()
	{
		Schema::drop('blog_tag');
	}
}