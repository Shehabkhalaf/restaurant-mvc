<?php

use MVC\core\app;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__) . DS);
define('APP', ROOT . 'app' . DS);
define('controllers', APP . 'controllers' . DS);
define('CORE', APP . 'core' . DS);
define('MODELS', APP . 'models' . DS);
define('VIEWS', APP . 'views' . DS);

require_once('../vendor/autoload.php');
$app = new app;
