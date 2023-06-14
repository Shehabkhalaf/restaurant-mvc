<?php

namespace MVC\models;

use Dcblogdev\PdoWrapper\Database;
use MVC\core\dbcontroller;
use PDOException;

class restaurant
{
  public static function add($POST, $FILES)
  {
    @session_start();
    $category = '';
    foreach ($POST['food'] as $value) :
      $category .= $value . " ";
    endforeach;
    $logo_name = $FILES["image"]["name"];
    $logo = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $logoType = $FILES["image"]["type"];
    $data = [
      'id' => '',
      'email' => $POST['email'],
      'password' => $POST['password'],
      'name' => $POST['name'],
      'location' => $POST['location'],
      'phone' => $_POST['phone'],
      'logoname' => $logo_name,
      'logo' => $logo,
      'logoType' => $logoType,
      'open' => $POST['openAt'],
      'close' => $POST['closeAt'],
      'fees' => $POST['fees'],
      'time' => $POST['deliveryTime'],
      'status' => $POST['status'],
      'description' => $POST['description'],
      'minorder' => $POST['minOrder'],
      'category' => $category
    ];
    $_SESSION['data'] = $data;
    $db = new dbcontroller;
    try {
      @$db->insert('partner', $_SESSION['data']);
      return 'true';
    } catch (PDOException $e) {
      return false;
    }
  }
  public function getData()
  {
    @session_start();
    $email = $_SESSION['data']['email'];
    $db = new dbcontroller;
    $data = @$db->select("select * from partner where email='$email'");
    $_SESSION['data']['id'] = $data[0]['id'];
    return $data;
  }
}
