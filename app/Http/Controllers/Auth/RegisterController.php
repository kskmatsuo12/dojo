<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

//飯田追記
// use App\Client;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            //登録時のバリデーション
            // 'name' => 'required|string|max:255',
            'name' => 'required',
            'user_name_mei' => 'required',
            'user_hurigana_sei' => 'required',
            'user_hurigana_mei' => 'required',

            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

            //飯田追記
            // 'client_id' => 'required|string|text|max:255|unique:clients',
            // 'client_pass' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'user_name_mei' => $data['user_name_mei'],
            'user_hurigana_sei' => $data['user_hurigana_sei'],
            'user_hurigana_mei' => $data['user_hurigana_mei'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $last_insert_id = $users->id;
        return view('users/profile', [
            "lid"=>$last_insert_id
        ]);
        
        //飯田下記追記
        // return Client::create([
        //     'client_name' => $data['client_name'],
        //     'client_id' => $data['client_id'],
        //     'client_id' => $data['client_id'],
        //     'client_pass' => bcrypt($data['client_pass']),
        // ]);
    }
}
