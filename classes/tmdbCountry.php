<?php
class TMDBCountry{
  //Variables;
  var $code;
  var $name;

  //Constructor;
  function TMDBCountry($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> code = $basicValues['iso_3166_1'];
    $this -> name = $basicValues['name'];
  }

  //Methods;
  function getCode(){
    return $this -> code;
  }

  function setCode($v){
    $this -> code = $v;
  }

  function getName(){
    return $this -> name;
  }

  function setName($v){
    $this -> name = $v;
  }
}
?>