<?php

class UsersController extends \BaseController {

  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function forum()
  {
    return View::make('users.forum');
  }

  public function create()
  {
    if (Auth::check()) // if user is already logged in redirect to home
    {
      return Redirect::to('/');
    }
    else
    {
      return View::make('users.create');
    }
  }

  public function store()
  {
    $validation = Validator::make(Input::all(), User::$rules);

    if ($validation->fails())
    {
      return Redirect::back()->withInput()->withErrors($validation->messages()); // sends back with error messages
    } // This is in case username/email address is allready taken

    $user = new User;
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->save();

    return Redirect::to('/login'); // creates user, then redirect to login page
  }

  public function about()
  {
    return View::make('users.about');
  }

  public function faq()
  {
    return View::make('users.faq');
  }

  public function home()
  {
    return View::make('users.home');
  }

  public function profile()
  {
    if (Auth::check()) // checks to see if user is logged in, if they are they can see their profile page
      return View::make('users.profile');
    else
      return Redirect::to('/login');
  }
}
