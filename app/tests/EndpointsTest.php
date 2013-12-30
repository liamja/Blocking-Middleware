<?php

/**
 * Check that the URI endpoints exist and adhere to the spec
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#1.1_Endpoints
 */

class EndpointsTest extends TestCase {

	/**
	 * Check /register/user POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fuser_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostRegisterUser()
	{
		$response = $this->call('POST', 'register/user');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /status/user POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fstatus.2Fuser_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostStatusUser()
	{
		$response = $this->call('POST', 'status/user');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /prepare/probe POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fprepare.2Fprobe_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostPrepareProbe()
	{
		$response = $this->call('POST', 'prepare/probe');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /register/probe POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fprobe_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostRegisterProbe()
	{
		$response = $this->call('POST', 'register/probe');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /update/gcm POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fupdate.2Fgcm_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostUpdateGCM()
	{
		$response = $this->call('POST', 'update/gcm');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /submit/url POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fsubmit.2Furl_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostSubmitURL()
	{
		$response = $this->call('POST', 'submit/url');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /response/httpt POST method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fresponse.2Fhttpt
	 * 
	 * @return void
	 */
	public function testPostResponseHTTPT()
	{
		$response = $this->call('POST', 'response/httpt');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

	/**
	 * Check /response/httpt GET method exists.
	 * It should return success:false by default, when no parameters are passed.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#GET_.2Frequest.2Fhttpt_-_Implemented
	 * 
	 * @return void
	 */
	public function testGetResponseHTTPT()
	{
		$response = $this->call('GET', 'response/httpt');
		$this->assertEquals('{"success":"false"}', $response->getContent());
		$this->assertResponseStatus(400);
	}

}