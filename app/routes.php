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

Route::get('/', function()
{
	return View::make('hello');
});


/**
 * /register/user POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fuser_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('register/user', function ()
{
    return View::make('hello');
});

/**
 * /status/user POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fstatus.2Fuser_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('status/user', function ()
{
    return View::make('hello');
});

/**
 * /prepare/probe POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fprepare.2Fprobe_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('prepare/probe', function ()
{
    return View::make('hello');
});

/**
 * /register/probe POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fregister.2Fprobe_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('register/probe', function ()
{
    return View::make('hello');
});

/**
 * /update/gcm POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fupdate.2Fgcm_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('update/gcm', function ()
{
    return View::make('hello');
});

/**
 * /submit/url POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fsubmit.2Furl_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('submit/url', function ()
{
    return View::make('hello');
});

/**
 * /response/httpt POST method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#POST_.2Fresponse.2Fhttpt
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::post('response/httpt', function ()
{
    return View::make('hello');
});

/**
 * /response/httpt GET method.
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API#GET_.2Frequest.2Fhttpt_-_Implemented
 * @author Liam Anderson <liamja@fastmail.fm>
 * 
 * @return Response
 */
Route::get('response/httpt', function ()
{
    return View::make('hello');
});

