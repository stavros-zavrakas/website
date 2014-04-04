<?php

class AuthController extends BaseController {

	public function facebook() {
		$data = array();

		$client = new oauth_client_class;
	    $client->debug = false;
	    $client->debug_http = true;
	    $client->server = 'Facebook';
	    $client->redirect_uri = 'http://'.$_SERVER['HTTP_HOST'] . '/auth/facebook';

	    $client->client_id = Config::get('basic.FB_appId');
	    $client->client_secret = Config::get('basic.FB_secret');

	    // API permissions
	    $client->scope = 'email, user_birthday, user_about_me, user_likes, publish_actions';
	    if(($success = $client->Initialize()))
	    {
	      if(($success = $client->Process()))
	      {
	        if(strlen($client->access_token))
	        {
	          $success = $client->CallAPI(
	            'https://graph.facebook.com/me', 
	            'GET', array(), array('FailOnAccessError'=>true), $user);
	        }
	      }
	      $success = $client->Finalize($success);
	    }
	    
	    if($client->exit) {
	      exit;
	    }

	    $data['user'] = $user;

		return View::make('auth.facebook')->with($data);
	}

	public function google() {
		$data = array();

		$client = new oauth_client_class;
		$client->server = 'Google';

		// set the offline access only if you need to call an API
		// when the user is not present and the token may expire
		$client->offline = true;

		$client->debug = false;
		$client->debug_http = true;
		$client->redirect_uri = 'http://'.$_SERVER['HTTP_HOST'] . '/auth/google';

		$client->client_id = Config::get('basic.Google_appId');
		$client->client_secret = Config::get('basic.Google_secret');

		$client->scope = 'https://www.googleapis.com/auth/userinfo.email '. 'https://www.googleapis.com/auth/userinfo.profile';
		if(($success = $client->Initialize()))
		{
			if(($success = $client->Process()))
			{
				if(strlen($client->authorization_error))
				{
					$client->error = $client->authorization_error;
					$success = false;
				}
				elseif(strlen($client->access_token))
				{
					$success = $client->CallAPI(
						'https://www.googleapis.com/oauth2/v1/userinfo',
						'GET', array(), array('FailOnAccessError'=>true), $user);
				}
			}
			$success = $client->Finalize($success);
		}

		if($client->exit)
			exit;

	    $data['user'] = $user;

		return View::make('auth.facebook')->with($data);
	}

	public function linkedin() {
		$client = new oauth_client_class;
		// $client->debug = 1;
		// $client->debug_http = 1;
		$client->server = 'LinkedIn';
		$client->redirect_uri = 'http://'.$_SERVER['HTTP_HOST'] . '/auth/linkedin';

		$client->client_id = Config::get('basic.LinkedIn_appId');
		$client->client_secret = Config::get('basic.LinkedIn_secret');

		$client->scope = 'r_fullprofile r_emailaddress';

		if(($success = $client->Initialize()))
		{
			if(($success = $client->Process()))
			{
				if(strlen($client->access_token))
				{
					$success = $client->CallAPI(
						'http://api.linkedin.com/v1/people/~', 
						'GET', array(
							'format'=>'json'
						), array('FailOnAccessError'=>true), $user);
				}
			}
			$success = $client->Finalize($success);
		}
		if($client->exit)
			exit;

		if(strlen($client->authorization_error))
		{
			$client->error = $client->authorization_error;
			$success = false;
		}

		if($success)
		{
		    $data['user'] = $user;

			return View::make('auth.facebook')->with($data);
		}
	}
}