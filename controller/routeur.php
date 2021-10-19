<?php
require_once(File::build_path(array("controller", "controllerErreur.php")));

/* Contrôleur par défaut */
$controller = 'controllerBeer';
$action = 'readAll';

require(File::build_path(array("controller", "controllerBeer.php")));
$controller::$action();

