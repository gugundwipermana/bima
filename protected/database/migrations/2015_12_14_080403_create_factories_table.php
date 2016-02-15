<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('latitude');
            $table->string('longitude');
            $table->string('factory_stores');
            $table->string('open_hour');
            $table->string('contact');
            $table->string('title_signup');
            $table->text('description');
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
		Schema::drop('factories');
	}

}
