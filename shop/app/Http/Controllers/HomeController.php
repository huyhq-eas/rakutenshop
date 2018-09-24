<?php

namespace RakutenShop\Http\Controllers;

use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use RakutenShop\Models\User;
class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showLogin()
    {
        // show the form
        return view('login');
    }

    public function doLogin(){
        // validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);
			// attempt to do the login
			if (Auth::attempt($userdata)) {
				// validation successful!
				// redirect them to the shop
				return Redirect::to('shop');
			} else {
				// validation not successful, send back to form
				return Redirect::to('login');
			}
		}
    }

    public function showSignup()
    {
        // show the form
        return view('signup');
    }

    public function doSignup(Request $request)
    {
        $user = new User();
        $email = $request->get("email");
        $user->name = $request->get("firstname");
        $user->email = $email;
        $user->username = $email;
        $user->password = Hash::make($request->get("password"));
        $user->remember_token = $request->get("checkbox");
        $user->save();
        return redirect("login");
    }
}
