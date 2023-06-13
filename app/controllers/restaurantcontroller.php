<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\restaurant;

class restaurantcontroller
{
  public function signup()
  {
    controller::view('partner\signup', []);
    restaurant::add();
  }
  public function partnerProfile()
  {
    controller::view('partner\partner', []);
  }
}
