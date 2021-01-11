<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminAuthController extends Controller
{
	use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

	/**
	 * Admin LogIn Page Show
	 */
    public function loginPage()
    {
    	return view('admin.login');
    }

    /**
	 * Admin registerPage Page Show
	 */
    public function registerPage()
    {
    	return view('admin.register');
    }

    /**
	 * Admin registration
	 */
    public function registerAdmin(Request $request)
    {
    	Admin::create([
    		'name' 		=> $request -> name,
    		'email' 	=> $request -> email,
    		'cell' 		=> $request -> cell,
    		'uname' 	=> $request -> uname,
    		'password' 	=> Hash::make($request -> pass),
    		//'photo' 	=> $request -> photo,
    	]);
    	return redirect() -> route('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
