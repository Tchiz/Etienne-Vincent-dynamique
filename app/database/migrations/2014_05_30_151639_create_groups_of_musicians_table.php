<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroupsOfMusiciansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'groups_of_musicians', function( $table ){
			$table->increments('id');
			$table->string('label');
			$table->text('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'groups_of_musicians' );
	}

}