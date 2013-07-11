<?php
class TMDBCompany{
  //Variables;
  var $id;
  var $name;
  var $description;
  var $headquarters;
  var $homepage;
  var $logoPath;
  var $parentCompany;

  //Constructor;
  function TMDBCompany($basicValues = false, $loadAll = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues, $loadAll);
    }
  }

  function loadBasicValues($basicValues, $loadAll = false){
    $this -> id            = $basicValues['id'];
    $this -> name          = $basicValues['name'];
    if( isset( $basicValues['logo_path'] ) ){
      $this -> logoPath      = $basicValues['logo_path'];
    }
    if( $loadAll === true ){
      $this -> description   = $basicValues['description'];
      $this -> headquarters  = $basicValues['headquarters'];
      $this -> homepage      = $basicValues['homepage'];
      $this -> parentCompany = $basicValues['parent_company'];
    }
  }

  //Methods;
  function getId(){
    return $this -> id;
  }

  function setId($v){
    $this -> id = $v;
  }

  function getName(){
    return $this -> name;
  }

  function setName($v){
    $this -> name = $v;
  }

  function getDescription(){
    return $this -> description;
  }

  function setDescription($v){
    $this -> description = $v;
  }

  function getHeadquarters(){
    return $this -> headquarters;
  }

  function setHeadquarters($v){
    $this -> headquarters = $v;
  }

  function getHomepage(){
    return $this -> homepage;
  }

  function setHomepage($v){
    $this -> homepage = $v;
  }

  function getLogoPath(){
    return $this -> logoPath;
  }

  function setLogoPath($v){
    $this -> logoPath = $v;
  }

  function getParentCompany(){
    return $this -> parentCompany;
  }

  function setParentCompany($v){
    $this -> parentCompany = $v;
  }

  //Alias;
  function hasLogo(){
    if( $this -> getLogoPath() != '' ){
      return true;
    }else{
      return false;
    }
  }
}
?>