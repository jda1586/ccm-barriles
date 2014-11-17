<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImgChangePhotoNumberAndBarrelModelIdToBarrelDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('barrel_details', function(Blueprint $table)
		{

            $table->string('image')->after('photo_number');

		});
        DB::statement('ALTER TABLE barrel_details MODIFY COLUMN photo_number VARCHAR(255) NOT NULL ');
        DB::statement('ALTER TABLE barrel_details change COLUMN barrel_model_id barrel_id INT');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::table('barrel_details', function(Blueprint $table)
		{

            $table->dropColumn('image');

		});
        DB::statement('ALTER TABLE barrel_details MODIFY COLUMN photo_number int(11) NOT NULL ');
        DB::statement('ALTER TABLE barrel_details rename COLUMN barrel_id barrel_model_id INT ');
	}

}
