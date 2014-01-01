<?php

/**
 * Tests for user creation, status checking, etc.
 */

class UserTest extends TestCase {

	/**
	 * Check that an email and password parameter are accepted for
	 * registration and that they are properly validated.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fuser_2
	 * 
	 * @return void
	 */
	public function testRegisterUserWithPostParameters()
	{
		$this->seed();

		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);
		
		$this->assertRegExp('/"status":"pending"/', $response->getContent());
		$this->assertRegExp('/"success":"true"/', $response->getContent());
		$this->assertResponseStatus(201);
	}

	/**
	 * Check that the user's email is saved to the database during registration.
	 * 
	 * @return void
	 */
	public function testEmailSavedOnRegistration()
	{
		$this->seed();

		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);

		$email = DB::table('users')
			->where('email', $postParams['email'])
			->pluck('email');

		$this->assertEquals($postParams['email'], $email);
	}

	/**
	 * Check that the user's password is saved to the database during
	 * registration and that it was hashed.
	 * 
	 * @return void
	 */
	public function testPasswordSavedOnRegistration()
	{
		$this->seed();

		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);

		$password = DB::table('users')
			->where('email', $postParams['email'])
			->pluck('password');

		$this->assertTrue(Hash::check($postParams['password'], $password));
	}

	/**
	 * Check that the user's public key is saved to the database during
	 * registration.
	 * 
	 * @return void
	 */
	public function testPublicKeySavedOnRegistration()
	{
		$this->seed();

		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);

		$publicKey = DB::table('users')
			->where('email', $postParams['email'])
			->pluck('publicKey');

		$this->assertRegExp('/-----BEGIN PUBLIC KEY-----/',
			$publicKey);
	}

	/**
	 * Check that an RSA keypair was generated during registration.
	 * 
	 * @return void
	 */
	public function testKeypairGenerated()
	{
		$this->seed();

		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);

		$this->assertRegExp('/"private_key":"-----BEGIN RSA PRIVATE KEY-----/',
			$response->getContent());
	}

	/**
	 * Check that the same email cannot be registered more than once.
	 * 
	 * @return void
	 */
	public function testEmailIsUnique()
	{
		// $this->seed();

		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);

		$regex = array('/"success":"false"/', '/"reason":/');

		foreach ($regex as $regex)
		{
			$this->assertRegExp($regex, $response->getContent());
		}

		$this->assertResponseStatus(400);
	}

}
