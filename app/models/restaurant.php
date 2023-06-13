<?php

namespace MVC\models;

use MVC\core\dbcontroller;

class restaurant
{
  public static function add()
  {
    @session_start();
    $db = new dbcontroller;
    @$db->insert('partner', $_SESSION['data']);
  }
}
