<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = 'home';


       /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username;
    
   /* Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
 
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }
   
    public function username()
    {
        $login1 = request()->input('username');
        if(is_numeric($login1) && is_numeric('mobile')){
            $field = 'mobile';
        } else if (filter_var($login1, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        }
        else{
            $field = 'username';
        }
        request()->merge([$field => $login1]);

        return $field;
    }
    public function authenticate(Request $request)
    {      
        echo 1;
        $credentials = $this->validate($request,array([
           'username' => 'required|email||mobile',
            'password' => 'required'
        ]));
        if($auth=Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            // Authentication was successful...
       if(auth::user()->isadmin==1){
        return redirect()->intended('admin.adminHome');        }
        else{
            return redirect()->route('insurance.home');
        }
    }
    else
        {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.',]);
      //  return redirect()->route('login')->with('Error', 'EMAIL or mobile and Password are wrong.');
        }
    }
}
