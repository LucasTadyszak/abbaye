<?php
require_once(File::build_path(array("model", "model.php")));

class beer {
  /** ATTRIBUTS **/
  private $id;
  private $name;
  private $originalPrice;
  private $calculatedPrice;

  /** CONSTRUCTEUR **/
  public function __construct($name = NULL, $originalPrice = NULL, $calculatedPrice = NULL){
    if(!is_null($name) && !is_null($originalPrice) && !is_null($calculatedPrice)){
      $this->name = $name;
      $this->originalPrice = $originalPrice;
      $this->calculatedPrice = $calculatedPrice;
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

  /** METHODES **/
  public static function readAll(){
    $sql = "SELECT * FROM beer";
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

  public function update(){
    $sql = 'UPDATE beer SET calculatedPrice = :calculatedPriceT';
    $req_prep = model::$pdo->prepare($sql);
    $values = array("calculatedPriceT" => $this->calculatedPrice);
    $req_prep->execute($values);
  }

  public function delete(){
    $sql = "DELETE FROM beer WHERE id = :idT";
    $req_prep = model::$pdo->prepare($sql);
    $values = array("idT" => $this->id);
    $req_prep->execute($values);
  }
}
