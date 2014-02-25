<?php

use Illuminate\Database\Migrations\Migration;

class CreateMusicians extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'musicians', function( $table ){
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('instrument');
			$table->text('biography');
			$table->string('pictureName');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'musicians' );
	}

}
