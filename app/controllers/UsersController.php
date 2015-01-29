<?php

class UsersController extends \BaseController {

  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function create()
  {
    return View::make('users.create');
  }

  public function store()
  {
    $user = new User;
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->save();

    return Redirect::to('/login');
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
    return View::make('users.profile');
  }

}
