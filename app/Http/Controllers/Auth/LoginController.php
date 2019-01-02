<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'usuario';
    }


    protected function credentials(Request $request)
    {
        $login = $request->input($this->username());

        // Comprobar si el input coincide con el formato de E-mail
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $field => $login,
            'password' => $request->input('password')
        ];
    }
 

    /**
     * Redirect the user after determining they are locked out.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );
        /* throw ValidationException::withMessages([
            $this->username() => [Lang::get('auth.throttle', ['seconds' => $seconds])],
        ])->status(429); */
        return response()->json( ['success' => 0, 'msgerror' => 'Demasiados intentos de inicio de sesión. Por favor, inténtelo de nuevo en '. $seconds .' segundos'] );
    }


    /***
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        /* throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]); */
        return response()->json( ['success' => 0, 'msgerror' => 'Credenciales Incorrectas'] );
    }
    

    
    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated()
    {
        return response()->json( ['success' => 1] );
    }



}
