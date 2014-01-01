<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	/**
	 * Seed the User table with test data.
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('users')->delete();
        
        // User::create(array('email' => 'foo@bar.com'));
    }

}
