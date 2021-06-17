<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Support\Facades\Auth;
/**
 * imports
 */
use App\User;

class AuthController extends Controller
{
    //
    /**
     * Write code on Method
     *
     *
     */
    public function postLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'pass' => 'required'
        ]);

        $credentials = $request->only('name', 'pass');

        $user = User::select('password','username')->where('username',$request->name)->first();
        /**
         * si el usuario se encuentra en la base de datos
         */
        if ($user) {
            # checamos las credenciales
            $check_credentials = ['username' => $request->name, 'password' => $request->pass];
            if (Auth::attempt($check_credentials)) {
                // dd('entre');
                return redirect()->route('dashboard_principal');
    
            }else{
                return redirect()->back()->with('error', 'Upps! Ingresaste credenciales inválidas.');
            }
        }

    }
}
