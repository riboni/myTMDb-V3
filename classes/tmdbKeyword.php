<?php
class TMDBKeyword{
  //Variables;
  var $id;
  var $name;

  //Constructor;
  function TMDBKeyword($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id   = $basicValues['id'];
    $this -> name = $basicValues['name'];
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
}
?>