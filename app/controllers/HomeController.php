<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome() {
		return View::make('hello');
	}

	public function CV() {
		return View::make('static.cv');
	}

	public function contact() {
		// Fetch all request data.
		$data = Input::all();

		// Build the validation constraint set.
		$rules = array(
			'name' => 'alpha_num|min:5',
			'email' => 'email',
			'message' => 'min:15'
		);

		// Create a new validator instance
		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			// We have to send the e-mail(s).
			$name = Input::get('name');
			$email = Input::get('email');
			$message = Input::get('message');

			$ipaddress = $_SERVER['REMOTE_ADDR'];  
	    $date = date('d/m/Y');  
	    $time = date('H:i:s'); 
			
			$emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p> 
	                  <p><strong>Name: </strong> {$name} </p> 
	                  <p><strong>Email Address: </strong> {$email} </p> 
	                  <p><strong>Message: </strong> {$message} </p> 
	                  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";  
			      
			mail(to, subject, message)("st.zavrakas@gmail.com", "New Enquiry", $emailbody);

			return 'Data was sent.';
		}
		return Redirect::to('/cv')->withErrors($validator);
	}
}