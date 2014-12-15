<?php

class UserController extends \BaseController {

	public function getLogin()
	{
	    return View::make('users.login');
	}
        
        public function postLogin()
	{
	    $data = Input::all();
            $rules = array(
                'username' => 'required',
                'password' => 'required'
            );
            
            $validator = Validator::make($data, $rules);
            
            if($validator->fails()) {
                return Redirect::to('/admin/login')->withErrors($validator)->withInput()->with('message', 'Incorrect data');
            }
            else {
                $user = array(
                    'username'=>Input::get('username'),
                    'password'=>Input::get('password'),
                );
                $remember = (Input::has('remember')) ? true : false;
                if(Auth::attempt($user, $remember)){ 
                    return Redirect::to('/')->with('message', "Hello, Admin!");
                } else {
                    return Redirect::to('/admin/login')->withErrors($validator)->withInput()->with('message', 'Incorrect data');                
                }
           }
	}
        
        public function logout() {
            $message = 'You are logout!';
            if(Auth::check()){
                Auth::logout();
                return Redirect::to('/')->with('message', $message);
            } else {
                return Redirect::to('/admin/login')->with('message', $message);
            }
        }
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $data = Input::all();
            
            //model/User
            $validator = User::validate($data);
            
            if ($validator->fails()) {
                return Redirect::to('admin/create')->withErrors($validator)->withInput()->with('message', 'Incorrect data!');
            }
            //model/User
	    User::newUser($data);
            return Redirect::to('/admin/login')->with('message', 'Registration is successful! Please, LogIn!');
	}


}
