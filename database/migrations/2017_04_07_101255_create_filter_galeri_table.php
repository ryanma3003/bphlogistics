<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilterGaleriTable extends Migration {

	public function up()
	{
		Schema::create('filter_galeri', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
		});
	}

	public function down()
	{
		Schema::drop('filter_galeri');
	}
}