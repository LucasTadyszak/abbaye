<?php
require_once(File::build_path(array("model", "modelBeer.php")));
require_once(File::build_path(array("lib", "session.php")));

class controllerBeer{
  /* Récupérer la liste des types */
  public static function readAll(){
    $pageTitle = "Accueil";
    if (isset($_POST['update-beer'])) {
      $allBeer = modelBeer::readAll();
      $id = intval($_POST['update-beer']);
      $modifieBeers = new modelBeer();
      $modifieBeers->update($allBeer, $id);
    }
    if (isset($_POST['reset-table'])) {
      $modifieBeers = new modelBeer();
      $modifieBeers->updateTable();
    }
    $tab_t = modelBeer::readAll();
    require (File::build_path(array("view", "navbar.php")));
    require	(File::build_path(array("view/accueil", "accueil.php")));
    require (File::build_path(array("view", "footer.php")));
  }

  public static function add(){
    $pageTitle = "...";
    if(isset($_POST['type'])){
      $nomType = htmlspecialchars($_POST['type']);
      $ajoutType = new modelBeer($nomType);
      $ajoutType->create();
      require (File::build_path(array("view", "navbar.php")));
      /* require	(File::build_path(array("view", "types", "nomDeLaVue.php"))); */
      require (File::build_path(array("view", "footer.php")));
    }
    else{
      controllerErreur::erreur("Problème dans la création du type");
    }
  }

  public static function update(){
    $pageTitle = "Accueil";
    if(isset($_POST['update-beer'])){
      $nomType = htmlspecialchars($_POST['type']);
      $modifieType = new modelBeer($nomType);
      $modifieType->update();
      require (File::build_path(array("view", "navbar.php")));
      /* require	(File::build_path(array("view", "types", "nomDeLaVue.php"))); */
      require (File::build_path(array("view", "footer.php")));
    }
    else{
      controllerErreur::erreur("Problème dans la modification du type");
    }
  }

  public static function delete(){
    $pageTitle = "...";
    if(isset($_POST['type'])){
      $nomType = htmlspecialchars($_POST['type']);
      $supprimeType = new modelBeer($nomType);
      $supprimeType->delete();
      require (File::build_path(array("view", "navbar.php")));
      /* require	(File::build_path(array("view", "types", "nomDeLaVue.php"))); */
      require (File::build_path(array("view", "footer.php")));
    }
    else{
      controllerErreur::erreur("Problème dans la suppression du type");
    }
  }

  /* Action reservée pour un administrateur */
  public static function something(){
    if(session::is_admin()){
      $pageTitle = "...";
    }
    else{
      controllerErreur::erreur("Action non autorisée pour un client");
    }
  }
}
