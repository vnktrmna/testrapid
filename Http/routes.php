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

Route::get('/user', function()
{
    $data = array();
    if (Auth::check()) {
        $data = Auth::user();
    }
    return View::make('user', array('data'=>$data));
});

Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});

Route::get('login/fb/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
    
    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();
     
    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');
     
    $me = $facebook->api('/me');

   
   
	//$profile = Profile::whereUid($uid)->first();
    //if (empty($profile)) {

    	$user = array();
    	$user[0] = $me['name'];
    	$user[1] = $me['id'];
    	$user[2]= 'https://graph.facebook.com/'.$me['id'].'/picture?type=large';

      //  $user->save();

        //$profile = new Profile();
        //$profile->uid = $uid;
    	//$profile->username = $me['id'];
    //	$profile = $user->profiles()->save($profile);
    //}
     
    //$profile->access_token = $facebook->getAccessToken();
    //$profile->save();

   // $user = $profile->user;
 
   // Auth::login($user);
     
    //return Redirect::to('/Contact/')->with('message', 'Logged in with Facebook');
    	return View::make('user', array('data'=>$user));
});


Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});

	Route::get('/contact', function () {
		return view('Contact');
	});
	
	

		Route::get('/user', function () {
			return view('user');
		});
		
	
	
		