<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostTable extends Migration {

	public function up()
	{
		Schema::create('blog_post', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('category_id')->unsigned();
			$table->string('title', 250);
			$table->string('slug', 250);
			$table->string('description', 250);
			$table->text('content');
			$table->softDeletes();
			$table->string('image', 250);
		});
	}

	public function down()
	{
		Schema::drop('blog_post');
	}
}