<?php

/**
 * Check that the URI endpoints exist and adhere to the spec
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#1.1_Endpoints
 */

class EndpointsTest extends TestCase {

	/**
	 * Check /register/user POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fuser_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostRegisterUser()
	{
		$this->call('POST', 'register/user');
		$this->assertResponseOk();
	}

	/**
	 * Check /status/user POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fstatus.2Fuser_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostStatusUser()
	{
		$this->call('POST', 'status/user');
		$this->assertResponseOk();
	}

	/**
	 * Check /prepare/probe POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fprepare.2Fprobe_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostPrepareProbe()
	{
		$this->call('POST', 'prepare/probe');
		$this->assertResponseOk();
	}

	/**
	 * Check /register/probe POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fprobe_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostRegisterProbe()
	{
		$this->call('POST', 'register/probe');
		$this->assertResponseOk();
	}

	/**
	 * Check /update/gcm POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fupdate.2Fgcm_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostUpdateGCM()
	{
		$this->call('POST', 'update/gcm');
		$this->assertResponseOk();
	}

	/**
	 * Check /submit/url POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fsubmit.2Furl_-_Implemented
	 * 
	 * @return void
	 */
	public function testPostSubmitURL()
	{
		$this->call('POST', 'submit/url');
		$this->assertResponseOk();
	}

	/**
	 * Check /response/httpt POST method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fresponse.2Fhttpt
	 * 
	 * @return void
	 */
	public function testPostResponseHTTPT()
	{
		$this->call('POST', 'response/httpt');
		$this->assertResponseOk();
	}

	/**
	 * Check /response/httpt GET method exists.
	 * 
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#GET_.2Frequest.2Fhttpt_-_Implemented
	 * 
	 * @return void
	 */
	public function testGetResponseHTTPT()
	{
		$this->call('GET', 'response/httpt');
		$this->assertResponseOk();
	}

}