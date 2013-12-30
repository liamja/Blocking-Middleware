<?php

use Illuminate\Database\Migrations\Migration;

/**
 * @author Liam Anderson <liamja@fastmail.fm>
 */
class CreateProbesTable extends Migration {

	private $tableName = 'probes';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists($this->tableName);
		Schema::create($this->tableName, function($table)
		{
			$table->increments('id');
			$table->string('uuid')
				->unique();
			$table->integer('userID')
				->unsigned();
			$table->text('publicKey');
			$table->enum('type', array('raspi', 'android', 'atlas', 'web'));
			$table->dateTime('lastSeen');
			$table->text('gcmRegID');
			$table->boolean('isPublic');
			$table->string('countryCode', 3);
			$table->integer('probeReqSent');
			$table->integer('probeRespRecv');
			$table->boolean('enabled');
			$table->integer('frequency');
			$table->integer('gcmType');
			$table->timestamps();

			$table->foreign('userID')
				->references('id')
				->on('users');
  		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop($this->tableName);
	}

}