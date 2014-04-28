<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TvguideStaging extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($t){
			$t->increments('id');
			$t->string('channel');
			$t->datetime('starting_time');
			$t->string('title');
			$t->string('episode_title');
			$t->string('country');
			$t->string('genre');
			$t->string('parental_rating');
			$t->string('performer');
			$t->string('regie');
			$t->text('story_middle');
			$t->string('year');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
