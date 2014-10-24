<?php

class UserController extends BaseController
{
  public function index(){
    $page = \Input::get('page', 1);
    $perPage = \Input::get('per_page', 100);
    $users = \User::where('id', '>', '0')->paginate($perPage);

    return Response::json($users);
  }
}
