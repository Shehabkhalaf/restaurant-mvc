<?php

namespace MVC\models;

use MVC\core\dbcontroller;
use PDOException;

class meal extends dbcontroller
{
  public function addMeal($POST, $FILES)
  {
    @session_start();
    $logo_name = $FILES["image"]["name"];
    $logo = addslashes(file_get_contents($FILES['image']['tmp_name']));
    $logoType = $FILES["image"]["type"];
    $partnerId = $_SESSION['data']['id'];
    $meal = [
      'partnerid' => $partnerId,
      'mealid' => '',
      'mealname' => $POST['foodName'],
      'description' => $POST['description'],
      'imageName' => $logo_name,
      'image' => $logo,
      'imagetype' => $logoType,
      'price' => $POST['price']
    ];
    try {
      $this->insert('meal', $meal);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
  public function getMeals()
  {
    session_start();
    $id = $_SESSION['data']['id'];
    $meals = $this->select("select * from meal where 	partnerid='$id'");
    foreach ($meals as $row => $value) :
      $image = $meals[$row]['image'];
      $imagetype = $meals[$row]['imagetype'];
      $imageUrl = "data:image/" . $imagetype . ";base64," . base64_encode($image);
      $meals[$row]["image"] = $imageUrl;
      unset($meals[$row]['imageName'], $meals[$row]['imagetype']);
    endforeach;
    return $meals;
  }

  public function modifyMeal($POST)
  {
    if ($POST['action'] == 'delete') {
      try {
        $id = ['mealid' => $POST['mealid']];
        $this->delete('meal', $id);
        return true;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
  }
}
