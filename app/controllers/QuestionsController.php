<?php

class QuestionsController extends \BaseController {

  public function store()
  {
    if (Input::get('username'))
    {
      Auth::user()->username = Input::get('username');
      Auth::user()->push();

      return Redirect::to('/logout');
    }
    else if (Input::get('email'))
    {
      Auth::user()->email = Input::get('email');
      Auth::user()->push();

      return Redirect::to('/profile');
    }
    else if (Input::get('password'))
    {
      Auth::user()->password = Hash::make(Input::get('password'));
      Auth::user()->push();

      return Redirect::to('/logout');
    }
  }


  public function username()
  {
    return View::make('questions.username');
  }

  public function email()
  {
    return View::make('questions.email');
  }

  public function password()
  {
    return View::make('questions.password');
  }

}
