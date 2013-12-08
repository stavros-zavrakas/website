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
			return 'Data was saved.';
		}
		return Redirect::to('/cv')->withErrors($validator);
	}
}