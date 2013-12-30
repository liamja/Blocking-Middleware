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
		$postParams = array('email' => 'bob@example.com', 'password' => '123456abc');
		$response = $this->call('POST', 'register/user', $postParams);
		
		$this->assertRegExp('/"status":"pending"/', $response->getContent());
		$this->assertRegExp('/"success":"true"/', $response->getContent());
		$this->assertRegExp('/"private_key":"-----BEGIN RSA PRIVATE KEY-----"/',
			$response->getContent());
		$this->assertResponseStatus(201);
	}

}
