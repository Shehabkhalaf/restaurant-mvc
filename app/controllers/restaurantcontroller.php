<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\meal;
use MVC\models\restaurant;

class restaurantcontroller extends restaurant
{
  public function signup()
  {
    controller::view('partner\signup');
    exit();
  }
  public function postSignup()
  {
    if (isset($_POST) && count($_POST) != 0) {
      $add = @restaurant::add($_POST, $_FILES);
      if ($add) {
        $this->getData();
        $this->dachboard();
      } else {
        $this->signup();
      }
    }
    exit();
  }
  public function dachboard()
  {
    controller::view('partner/partner');
    exit();
  }
  public function food()
  {
    ob_start();
    $restaurant = new meal;
    $meals = $restaurant->getMeals();
    controller::view('partner/Food', ['meals' => $meals]);
    if (!empty($_POST['foodName'])) {
      $addmeal = $restaurant->addMeal($_POST, $_FILES);
      if ($addmeal) {
        header('Refresh: 0.3');
        exit;
      } else {
        header('Location: food');
        exit;
      }
    } else if (!empty($_POST['mealid'])) {
      $modify = $restaurant->modifyMeal($_POST);
      if ($modify) {
        header('Refresh: 0.3');
        exit;
      } else {
        header("Location: dachboard");
      }
    }
    ob_end_flush();
  }
}
