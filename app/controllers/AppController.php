<?php

class AppController extends BaseController
{

  public function index()
  {
    return View::make('app');
  }

}
