<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('Posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->string('slug');
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Posts');
	}
}