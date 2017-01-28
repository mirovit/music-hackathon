<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;

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
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @param $driver
     * @return Response
     */
    public function redirectToProvider($driver)
    {
        if (!in_array($driver, ['facebook'])) {
            return redirect()->route('app.home');
        }

        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @param $driver
     * @return Response
     */
    public function handleProviderCallback($driver)
    {
        if (!in_array($driver, ['facebook'])) {
            return redirect()->route('app.home');
        }

        $socialUser = Socialite::driver($driver)->user();

        $user = User::firstOrCreate(['email' => $socialUser->email], ['name' => $socialUser->name]);

        auth()->login($user);

        return redirect()->route('app.home');
    }
}
