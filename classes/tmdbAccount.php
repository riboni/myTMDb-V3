<?php
class TMDBAccount{
  //Variables;
  var $id;
  var $name;
  var $language;
  var $contry;
  var $showAdultContent;
  var $username;

  //Constructor;
  function TMDBAccount($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id               = $basicValues['id'];
    $this -> name             = $basicValues['name'];
    $this -> language         = $basicValues['iso_639_1'];
    $this -> contry           = $basicValues['iso_3166_1'];
    $this -> showAdultContent = $basicValues['include_adult'];
    $this -> username         = $basicValues['username'];
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

  function getLanguage(){
    return $this -> language;
  }

  function setLanguage($v){
    $this -> language = $v;
  }

  function getContry(){
    return $this -> contry;
  }

  function setContry($v){
    $this -> contry = $v;
  }

  function getShowAdultContent(){
    return $this -> showAdultContent;
  }

  function setShowAdultContent($v){
    $this -> showAdultContent = $v;
  }

  function getUsername(){
    return $this -> username;
  }

  function setUsername($v){
    $this -> username = $v;
  }
}
?>