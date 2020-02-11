<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required'
        ]);

//        if ($validator->fails()) {
//            return redirect()->back();
//        }

        // else, user has filled in all the correct details, try to log them in...
        $user = User::where('email', $email)->first();
        if ($user) {
            // user was found...
            if (password_verify($request->get('password'), $user->password)) {
                // store user session...
                Session::put('user', $user->email);
                Session::put('first_name', $user->first_name);
                // user logged in successfully... take them to their account...
                return redirect('/my-account');

            } else {
                $alert = ['message' => 'Wrong Login Credentials', 'class' => 'alert alert-danger'];
                return redirect()->back()->with(compact('alert'));
            }
        } else {
            $alert = 'Invalid login credentials.';
            Session::flash('alert', $alert);
            return redirect('/login');
        }
    }

    function sign_up(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'first_name' => 'required|min:3',
//            'last_name' => 'required|min:3',
//            'email' => 'required|email',
//            'password' => 'required|min:5|confirmed',
//            'password_confirmation' => 'required'
//        ]);
//        if ($validator->fails()) {
//            return redirect()->back();
//        }

        $name = explode(' ', $request->get('full_name'));
        $first_name = $name[0];
        $last_name = $name[1];

        try {
            $request->offsetSet('first_name', $first_name);
            $request->offsetSet('last_name', $last_name);
            $request->offsetSet('password', password_hash($request->get('password'), PASSWORD_BCRYPT));
            User::create($request->all());
            Session::put('user_id', $request->get('email_address'));
//            $request->session()->flash('registration_status', 'Your account has been created successfully. Please complete the steps below to activate your account.');
//            return \response()->json(['status' => 'success']);
        } catch (QueryException $exception) {
            return response()->json(['status' => '0']);
        }

        print_r($request->all());
    }

    function my_account()
    {
        $status = [];
        if (!Session::get('user')) {
            $status['message'] = 'Please Login to continue';
            return redirect('/login')->with(compact('status'));
        }

        return view('account');
    }

    function logout()
    {
        Session::remove('user');
        Session::flash('status', 'Task was successful!');
        return redirect('/login');
    }
}
