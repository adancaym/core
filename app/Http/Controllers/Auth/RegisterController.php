<?php

namespace App\Http\Controllers\Auth;

use App\Cuenta;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        if (!isset($data['id_cuenta'])){
            $cuenta = new Cuenta();
            $cuenta->cuenta = date('Y-m-d-h-m-s').'user';
            $cuenta->id_cuenta_padre = null;
            $cuenta->save();
            $data['id_cuenta'] = $cuenta->id_cuenta;
        }

        $return = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'id_cuenta'=>$data['id_cuenta'],
            'password' => Hash::make($data['password']),
        ]);

        $return->roles()->attach(2);

        return $return;
    }
}
