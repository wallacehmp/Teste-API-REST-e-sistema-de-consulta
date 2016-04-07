<?php
namespace App\Http\Controllers;

class UserController extends Controller
{    
    public function doLogin()
    {
        $rules = array(
            'user'    => 'required|user', 
            'password' => 'required|alphaNum|min:3' 
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password')); 
        } else {            
            $userdata = array(
                'user'     => Input::get('user'),
                'password'  => Input::get('password')
            );

            if (Auth::attempt($userdata)) {
                echo 'SUCCESS!';

            } else {        
                return Redirect::to('login');
            }
        }
    }
}
