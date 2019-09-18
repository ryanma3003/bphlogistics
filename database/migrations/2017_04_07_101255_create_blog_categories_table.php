<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('blog_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
			$table->string('slug', 250);
			$table->string('description', 250);
		});
	}

	public function down()
	{
		Schema::drop('blog_categories');
	}
}