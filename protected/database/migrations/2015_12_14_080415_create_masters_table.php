<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('masters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('term');
            $table->text('sitemap');
            $table->text('privacy');
            $table->string('facebook');
            $table->string('twitter');
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
		Schema::drop('masters');
	}

}
