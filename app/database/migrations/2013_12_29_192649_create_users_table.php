<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	private $tableName = 'users';

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
			$table->string('email')
				->unique();
			$table->string('password');
			$table->text('preference');
			$table->string('fullName');
			$table->boolean('isPublic');
			$table->string('countryCode', 3);
			$table->string('probeHMAC');
			$table->enum('status', array('pending', 'ok', 'suspended', 'banned'))
				->default('pending');
			$table->text('pgpKey');
			$table->string('yubiKey');
			$table->text('publicKey');
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