<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGaleriTable extends Migration {

	public function up()
	{
		Schema::create('galeri', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('gambar', 250)->nullable();
			$table->integer('filter_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('galeri');
	}
}