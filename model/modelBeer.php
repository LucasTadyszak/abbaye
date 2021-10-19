<?php
require_once(File::build_path(array("model", "model.php")));

class modelBeer {
  /** ATTRIBUTS **/
  public $id;
  public $name;
  public $originalPrice;
  public $calculatedPrice;
  public $calculatedPriceOld;

  /** CONSTRUCTEUR **/
  public function __construct($name = NULL, $originalPrice = NULL, $calculatedPrice = NULL){
    if(!is_null($name) && !is_null($originalPrice) && !is_null($calculatedPrice) && !is_null($calculatedPriceOld)){
      $this->name = $name;
      $this->originalPrice = $originalPrice;
      $this->calculatedPrice = $calculatedPrice;
      $this->calculatedPriceOld = $calculatedPriceOld;
    }
  }

  /** GETTERS **/
  public function getId(){
    return $this->$id;
  }
  public function getName(){
    return $this->$name;
  }
  public function getOriginalPrice(){
    return $this->$originalPrice;
  }
  public function getCalculatedPrice(){
    return $this->$calculatedPrice;
  }
  public function getCalculatedPriceOld(){
    return $this->$calculatedPriceOld;
  }

  /** SETTERS **/
  public function setId($id){
    $this->id = $id;
  }
  public function setName($name){
    $this->name = $name;
  }
  public function setOriginalPrice($originalPrice){
    $this->originalPrice = $originalPrice;
  }
  public function setCalculatedPrice($calculatedPrice){
    $this->calculatedPrice = $calculatedPrice;
  }
  public function setCalculatedPriceOld($calculatedPriceOld){
    $this->calculatedPriceOld = $calculatedPriceOld;
  }

  /** METHODES **/
  public static function readAll(){
    $sql = "SELECT * FROM beer order by 4";
    $rep = model::$pdo->query($sql);
    $rep->setFetchMode(PDO::FETCH_CLASS, 'modelBeer');
    return $rep->fetchAll();
  }

  public function create(){
    $sql = "INSERT INTO beer('name', 'originalPrice', 'calculatedPrice') VALUES (:nameT, :originalPriceT, :calculatedPriceT)";
    $req_prep = model::$pdo->prepare($sql);
    $values = array("nameT" => $this->name, "originalPriceT" => $this->originalPrice, "calculatedPriceT" => $this->calculatedPrice);
    $req_prep->execute($values);
  }

  public function update($allBeer, $id){
    for($i = 0; $i < count($allBeer); $i++){
      if ($allBeer[$i]->id == $id) {
        $sql = "UPDATE beer SET calculatedPriceOld = calculatedPrice, calculatedPrice = :addCalculatedPriceT WHERE id = $id;";
        $req_prep = model::$pdo->prepare($sql);
        $values = array("addCalculatedPriceT" => $allBeer[$i]->calculatedPrice + 0.1);
        $req_prep->execute($values);
      } else {
        if (6 == $allBeer[$i]->id) {
          $sql = "UPDATE beer SET calculatedPriceOld = calculatedPrice, calculatedPrice = :removeCalculatedPriceT WHERE calculatedPriceOld >= 0.82 and id = 6;";
          $req_prep = model::$pdo->prepare($sql);
          $values = array("removeCalculatedPriceT" => $allBeer[$i]->calculatedPrice - 0.02);
          $req_prep->execute($values);
        } else {
          $sql = "UPDATE beer SET calculatedPriceOld = calculatedPrice, calculatedPrice = :removeCalculatedPriceT WHERE calculatedPriceOld >= 1.92 and id = ".strval($allBeer[$i]->id)." ;";
          $req_prep = model::$pdo->prepare($sql);
          $values = array("removeCalculatedPriceT" => $allBeer[$i]->calculatedPrice - 0.02);
          $req_prep->execute($values);
        }
      }
    }
  }

  public function delete(){
    $sql = "DELETE FROM beer WHERE id = :idT";
    $req_prep = model::$pdo->prepare($sql);
    $values = array("idT" => $this->id);
    $req_prep->execute($values);
  }
}
