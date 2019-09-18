<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('blog_post', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('blog_categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('galeri', function(Blueprint $table) {
			$table->foreign('filter_id')->references('id')->on('filter_galeri')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('blog_post_tag', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('blog_post_tag')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('blog_post_tag', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('blog_post')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('blog_post', function(Blueprint $table) {
			$table->dropForeign('blog_post_category_id_foreign');
		});
		Schema::table('galeri', function(Blueprint $table) {
			$table->dropForeign('galeri_filter_id_foreign');
		});
		Schema::table('blog_post_tag', function(Blueprint $table) {
			$table->dropForeign('blog_post_tag_tag_id_foreign');
		});
		Schema::table('blog_post_tag', function(Blueprint $table) {
			$table->dropForeign('blog_post_tag_post_id_foreign');
		});
	}
}