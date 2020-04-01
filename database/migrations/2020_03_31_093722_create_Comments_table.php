<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('Comments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->string('name');
			$table->string('email');
			$table->string('website')->nullable();
			$table->string('comment');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Comments');
	}
}