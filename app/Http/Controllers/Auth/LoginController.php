<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
/**
 * imports
 */
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
      return 'name';
    }

    protected function process_login(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        $user = User::where('username',$request->name)->first();
        /**
         * si el usuario se encuentra en la base de datos
         */
        if ($user) {
            # checamos las credenciales
            if (auth()->attempt($credentials)) {

                return redirect()->route('home');
    
            }else{
                session()->flash('message', 'Credenciales No Válidas');
                return redirect()->back();
            }
        }
    }

    public function show_login_form()
    {
        return view('login');
    }

    public function logout(Redirector $redirect)
    {
        Auth::logout();

        return $redirect->route('dashboard_principal');
    }
}
