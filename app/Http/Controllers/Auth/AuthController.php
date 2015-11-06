<?php

namespace App\Http\Controllers\Auth;

use App\AdminLogin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
class AuthController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest', ['except' => 'getLogout']);
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
      'username' => 'required',
      'email' => 'required|email',
      'password' => 'required',
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  protected function create(Request $request)
  {
    $this->validate($request, [
      $data => 'required', 'password' => 'required',
    ]);
    return User::create([
      'username' => $data['username'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
    ]);
  }


  use ThrottlesLogins;

  public function getLogin()
  {
    if (view()->exists('auth.authenticate')) {
      return view('auth.authenticate');
    }

    return view('home.login');
  }

  /**
   * Handle a login request to the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function postLogin(AdminRequest $request)
  {
    $throttles = in_array(
      ThrottlesLogins::class, class_uses_recursive(get_class($this))
    );

    if ($throttles && $this->hasTooManyLoginAttempts($request)) {

      return $this->sendLockoutResponse($request);
    }

    if (Auth::attempt(['username' => $request->username, 'password' => $request->password]) || Auth::attempt(['email'=> $request->username, 'password' => $request->password]))
    {
      return redirect()->intended($this->redirectPath());
    }

    return redirect($this->loginPath())
      ->withInput($request->only($this->loginUsername(), 'remember'))
      ->withErrors([
        $this->loginUsername() => $this->getFailedLoginMessage(),
      ]);

    // $this->validate($request, [
    //     $this->loginUsername() => 'required', 'password' => 'required',
    // ]);

    // $credentials = $this->getCredentials($request);

    // $throttles = in_array(
    //     ThrottlesLogins::class, class_uses_recursive(get_class($this))
    // );

    // if ($throttles && $this->hasTooManyLoginAttempts($request)) {

    //     return $this->sendLockoutResponse($request);
    // }

    // if (Auth::attempt($this->getCredentials($request), $request->has('remember'))) {
    //     if ($throttles) {
    //         $this->clearLoginAttempts($request);
    //     }

    //     return redirect()->intended($this->redirectPath());
    // }

    // if ($throttles) {
    //     $this->incrementLoginAttempts($request);
    // }

    // return redirect($this->loginPath())
    //     ->withInput($request->only($this->loginUsername(), 'remember'))
    //     ->withErrors([
    //         $this->loginUsername() => $this->getFailedLoginMessage(),
    //     ]);
  }

  /**
   * Get the needed authorization credentials from the request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  protected function getCredentials(Request $request)
  {
    return $request->only($this->loginUsername(), 'password');
  }

  /**
   * Get the failed login message.
   *
   * @return string
   */
  protected function getFailedLoginMessage()
  {
    return 'These credentials do not match our records.';
  }

  /**
   * Log the user out of the application.
   *
   * @return \Illuminate\Http\Response
   */
  public function getLogout()
  {
    Auth::logout();
    return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/login');
  }

  /**
   * Get the path to the login route.
   *
   * @return string
   */
  public function loginPath()
  {

    return property_exists($this, 'loginPath') ? $this->loginPath :'/login';
  }

  /**
   * Get the login username to be used by the controller.
   *
   * @return string
   */
  public function loginUsername()
  {
    return property_exists($this, 'username') ? $this->username : 'username';
  }

  public function redirectPath()
  {

    if (property_exists($this, 'redirectPath')) {
      return $this->redirectPath;
    }

    return property_exists($this, 'redirectTo') ? $this->redirectTo :'/dashboard';
  }
}
