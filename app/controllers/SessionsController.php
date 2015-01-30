<?php

class SessionsController extends BaseController {

  public function create()
  {
    return View::make('sessions.create');
  }

  public function store()
  {
    if (Auth::attempt(Input::only('username', 'password')))
    {
      return Redirect::to('/');
    }
    $validation = Validator::make(Input::all(), User::$rules);

    if ($validation->fails())
    {
      return Redirect::back()->withInput()->withErrors($validation->messages());
    }
  }


  public function destroy()
  {
    Session::flush();

    return Redirect::to('/');
  }
}
