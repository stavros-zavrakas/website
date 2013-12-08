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
			// Following this tutorial to send the mail:
			// http://net.tutsplus.com/tutorials/html-css-techniques/build-a-neat-html5-powered-contact-form/
			$name = Input::get('name');
			$email = Input::get('email');
			$message = Input::get('message');

			$ipaddress = $_SERVER['REMOTE_ADDR'];  
	    $date = date('d/m/Y');  
	    $time = date('H:i:s'); 

			$headers = "From: " . $email . "<script type=\"text/javascript\"> 
			/* <![CDATA[ */ 
			(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName(\"script\");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})(); 
			/* ]]> */ 
			</script>" . "\r\n";  
			
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
			      
			$emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p> 
	                  <p><strong>Name: </strong> {$name} </p> 
	                  <p><strong>Email Address: </strong> {$email} </p> 
	                  <p><strong>Message: </strong> {$message} </p> 
	                  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";  
			      
			mail("st.zavrakas@gmail.com<script type=\"text/javascript\"> 
			/* <![CDATA[ */ 
			(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName(\"script\");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})(); 
			/* ]]> */ 
			</script>","New Enquiry", $emailbody, $headers);

			return 'Data was sent.';
		}
		return Redirect::to('/cv')->withErrors($validator);
	}
}