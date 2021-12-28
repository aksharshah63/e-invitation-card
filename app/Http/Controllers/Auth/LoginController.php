<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;

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

    public function login(Request $request) {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            // $link = getUserLocationLink();
            // $routeLink = route('home') . $link;
            // session(['user_home_rote' => $routeLink]);
            // if (isset($input['back_to']) && !empty($input['back_to'])) {
            //     $route = route($input['back_to']) . '#' . $input['p'];
            //     return Redirect::to($route);
            // } elseif (isset($input['ru']) && !empty($input['ru'])) {
            //     return Redirect::to($input['ru']);
            // } else {
            //     if (auth()->user()->type == 'user') {
            //         return Redirect::to($routeLink);
            //     } else {
            //         return redirect()->route('dashboard');
            //     }
            // }
            return redirect()->route('weddings.index');
        } else {
            // return redirect()->route('user.register')
            //     ->with('error','Email-Address And Password Are Wrong.');
            $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
            return Redirect::back()->withErrors($errors);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
