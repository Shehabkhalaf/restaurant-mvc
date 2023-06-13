<?php

namespace MVC\controllers;

class restaurantcontroller
{
  public function signup()
  {
    require_once(VIEWS . 'partner/signup-partner.php');
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }
}