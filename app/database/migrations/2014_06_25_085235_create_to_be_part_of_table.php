<?php

use Illuminate\Database\Migrations\Migration;

class CreateToBePartOfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'to_be_part_of', function( $table ){
			$table->integer('id_musician');
			$table->integer('id_group_of_musicians');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'to_be_part_of' );
	}

}