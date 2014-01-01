<?php

class UserController extends \BaseController {

	/**
	 * Generate the RSA key pairs for probe authentication.
	 *
	 * @return Array
	 */
	private function generateKeys()
	{
		$rsa = new Crypt_RSA();

		return $rsa->createKey();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created user in the database.
	 *
	 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fuser_-_Implemented
	 *
	 * @return Response
	 */
	public function store()
	{
	    $input = Input::only('email', 'password');

	    $validator = Validator::make($input, array(
	        'email' => 'required|email',
	        'password' => 'required',
	    ));

	    if ($validator->passes())
	    {
	    	$keyPair = $this->generateKeys();

	    	$user = new User;

	    	$user->email = $input['email'];
	    	$user->password = Hash::make($input['password']);
	    	$user->publicKey = $keyPair['publickey'];

	    	$user->save();

	        return Response::json(
	            array(
	                'status' => 'pending',
	                'success' => 'true',
	                'private_key' => $keyPair['privatekey']
	                ), 201);
	    }
	    else
	    {
	        return Response::json(
	            array(
	                'success' => 'false',
	                'reason' => $validator->messages()->all()
	                ), 400);
	    }

	    return Response::json(array('success' => 'false'), 400);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
