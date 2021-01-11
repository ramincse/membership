<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
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
}
