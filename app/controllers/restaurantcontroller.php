<?php

namespace MVC\controllers;

use MVC\core\controller;

class restaurantcontroller
{
  public function signup()
  {
    controller::view('signup-partner', []);
  }
}