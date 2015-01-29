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

    return 'Failed';

  }

  public function destroy()
  {
    Session::flush();

    return Redirect::to('/');
  }
}
