<?php
class TMDBCast{
  //Variables;
  var $id;
  var $name;
  var $character;
  var $order;
  var $profilePath;

  //Constructor;
  function TMDBCast($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id          = $basicValues['id'];
    $this -> name        = $basicValues['name'];
    $this -> character   = $basicValues['character'];
    $this -> order       = $basicValues['order'];
    $this -> profilePath = $basicValues['profile_path'];
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

  function getCharacter(){
    return $this -> character;
  }

  function setCharacter($v){
    $this -> character = $v;
  }

  function getOrder(){
    return $this -> order;
  }

  function setOrder($v){
    $this -> order = $v;
  }

  function getProfilePath(){
    return $this -> profilePath;
  }

  function setProfilePath($v){
    $this -> profilePath = $v;
  }

  //Has methods;
  function hasProfile(){
    if( $this -> getProfilePath() != '' ){
      return true;
    }else{
      return false;
    }
  }
}
?>