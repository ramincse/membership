<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest') -> except('showAllUser');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create($data)
    {
        $unique_file_name = 'avatar.jpg';
        if( $data -> hasFile('photo') ){
            $img = $data -> file('photo');
            $unique_file_name = md5( time() . rand() ) . '.' . $img -> getClientOriginalExtension();
            $img -> move( public_path('media/photos/users/'), $unique_file_name );
        }
        return User::create([
            'name'  => $data -> name,
            'uname' => $data -> uname,
            'cell'  => $data -> cell,
            'email' => $data -> email,
            'password' => Hash::make($data -> password),
            'photo' => $unique_file_name,
        ]);
    }

    /**
     * S
     */
    public function showAllUser()
    {
        //$all_users = User::latest() -> get();
        $all_users = User::latest() -> paginate(2);
        return view('users', compact('all_users'));
    }
} //End of class RegisterController extends Controller
