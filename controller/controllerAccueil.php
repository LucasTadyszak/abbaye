<?php
require_once(File::build_path(array("model", "modelBeer.php")));
require_once(File::build_path(array("lib", "session.php")));

class controllerAccueil{
  public static function readAll(){
    $pageTitle = "Accueil";
    $tab_t = modelBeer::readAll();
    require(File::build_path(array("view", "navbar.php")));
    require(File::build_path(array("view/accueil", "accueil.php")));
    require(File::build_path(array("view", "footer.php")));
  }
}
