T<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarrelDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barrel_details', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('barrel_model_id');
            $table->integer('sku');
            $table->string('material');
            $table->integer('quantity');
            $table->decimal('unit_price');
            $table->text('description');
            $table->string('pep');
            $table->integer('photo_number');
            $table->string('piece_number');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('barrel_details');
	}

}
