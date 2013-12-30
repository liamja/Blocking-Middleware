<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fuser_-_Implemented
 * 
 * @return Response
 */
Route::post('register/user', function ()
{
    $input = Input::only('email', 'password');

    $validator = Validator::make($input, array(
        'email' => 'required|email',
        'password' => 'required',
    ));

    if ($validator->passes())
    {
        return Response::json(
            array(
                'status' => 'pending',
                'success' => 'true',
                'private_key' => '-----BEGIN RSA PRIVATE KEY-----'
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
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fstatus.2Fuser_-_Implemented
 * 
 * @return Response
 */
Route::post('status/user', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fprepare.2Fprobe_-_Implemented
 * 
 * @return Response
 */
Route::post('prepare/probe', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fprobe_-_Implemented
 * 
 * @return Response
 */
Route::post('register/probe', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fupdate.2Fgcm_-_Implemented
 * 
 * @return Response
 */
Route::post('update/gcm', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fsubmit.2Furl_-_Implemented
 * 
 * @return Response
 */
Route::post('submit/url', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fresponse.2Fhttpt
 * 
 * @return Response
 */
Route::post('response/httpt', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

/**
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#GET_.2Frequest.2Fhttpt_-_Implemented
 * 
 * @return Response
 */
Route::get('response/httpt', function ()
{
    return Response::json(array('success' => 'false'), 400);
});

