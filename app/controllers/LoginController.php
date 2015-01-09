<?php

class LoginController extends BaseController {

	/**
	 * Apresenta form para login
	 *
	 * @return Response
	 */
	public function login()
	{
		if (Auth::check())
		{
			Auth::logout();
			return View::make('home');
		}
		else
		{
			return View::make('login');
		}
	}

	/**
	 * Valida o login
	 *
	 * @return Response
	 */
	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$messages = array(
			'required' => 'O campo :attribute é obrigatório.',
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules, $messages);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)// send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);


			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				return Redirect::to('/');

			} else {

				// validation not successful, send back to form
				return Redirect::to('login');

			}

		}
	}

}
