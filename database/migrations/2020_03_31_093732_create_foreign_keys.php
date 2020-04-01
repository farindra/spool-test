<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Posts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('Users')
						->onDelete('cascade');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('Posts')
						->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::table('Posts', function(Blueprint $table) {
			$table->dropForeign('Posts_user_id_foreign');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->dropForeign('Comments_post_id_foreign');
		});
	}
}