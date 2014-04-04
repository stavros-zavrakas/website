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

}