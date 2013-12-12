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
		$data = array();
    $data['mail_message'] = Session::get('mail_message');

		return View::make('static.cv')->with($data);
	}

	public function contact() {
		// Fetch all request data.
		$data = Input::all();

		// Build the validation constraint set.
		$rules = array(
			'name' => 'alpha_num|min:5',
			'email' => 'email',
			'message' => 'min:15',
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

      $data['body'] = Input::get('message');
      $data['ipaddress'] = $_SERVER['REMOTE_ADDR'];  
      $data['date'] = date('d/m/Y');  
      $data['time'] = date('H:i:s'); 

	    Mail::send('emails.contact', $data, function($messageToSent) use ($toEmail, $toName, $fromEmail, $fromName) {
        $messageToSent->to($toEmail, $toName);

        $messageToSent->from($fromEmail, $fromName);

        $messageToSent->subject("New Enquiry from: stavros.zavrakas.gr");
    	});

	    return Redirect::to('/')->with('mail_message', 'You sent the mail succesfully');
			// return 'Data was sent.';
		}
		return Redirect::to('/')->withErrors($validator);
	}
}