<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function login(){
        $cred = $this->validate(request(), [
            'username'=>'required',
            'password'=>'required'
        ]);

        //return $cred;

        if (Auth::attempt($cred)) {
            return 'Paso';
        }
        return 'no';

    }




   
}
