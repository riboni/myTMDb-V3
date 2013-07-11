<?php
class TMDBChangeId{
  //Variables;
  var $id;
  var $adult;
  var $type;

  //Constructor;
  function TMDBChangeId($basicValues = false, $type = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
    $this -> type = $type;
  }

  function loadBasicValues($basicValues){
    $this -> id    = $basicValues['id'];
    $this -> adult = $basicValues['adult'];
  }

  //Methods;
  function getId(){
    return $this -> id;
  }

  function setId($v){
    $this -> id = $v;
  }

  function getAdult(){
    return $this -> adult;
  }

  function setAdult($v){
    $this -> adult = $v;
  }

  function getType(){
    return $this -> type;
  }

  function setType($v){
    $this -> type = $v;
  }
}
?>