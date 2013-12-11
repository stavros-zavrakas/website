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
			'message' => 'min:15',
			'recaptcha_response_field' => 'required|recaptcha',
		);

		// Create a new validator instance
		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {
			// Standard initialization
			$toEmail = "st.zavrakas@gmail.com";
			$toName = "Stavros Zavrakas";

			$fromEmail = Input::get('email');
			$fromName = Input::get('name');
      $message = Input::get('message');

      $ipaddress = $_SERVER['REMOTE_ADDR'];  
      $date = date('d/m/Y');  
      $time = date('H:i:s'); 
      
			$subject = "<p>You have recieved a new message from the enquiries form on your website.</p> 
              <p><strong>Name: </strong> {$fromName} </p> 
              <p><strong>Email Address: </strong> {$fromEmail} </p> 
              <p><strong>Message: </strong> {$message} </p> 
              <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";

	    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject) {
        $message->to($toEmail, $toName);

        $message->from($fromEmail, $fromName);

        $message->subject($subject);
    	});

			return 'Data was sent.';
		}
		return Redirect::to('/')->withErrors($validator);
	}
}