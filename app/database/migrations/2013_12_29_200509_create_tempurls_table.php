<?php

use Illuminate\Database\Migrations\Migration;

/**
 * @author Liam Anderson <liamja@fastmail.fm>
 */
class CreateTempurlsTable extends Migration {

	private $tableName = 'tempURLs';

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
			$table->increments('tempID');
			$table->text('URL');
			$table->string('hash', 32);
			$table->text('headers');
			$table->text('content_type');
			$table->integer('code');
			$table->boolean('fullFidelityReq');
			$table->integer('urgency');
			$table->enum('source', array('social', 'user', 'canary', 'probe'));
			$table->integer('targetASN');
			$table->enum('status', array('pending', 'failed', 'ready', 'complete'));
			$table->dateTime('lastPolled');
			$table->integer('polledAttempts');
			$table->integer('polledSuccess');
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
		Schema::drop($this->tableName);
	}

}