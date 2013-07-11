<?php
class TMDBTranslation{
  //Variables;
  var $code;
  var $name;
  var $englishName;

  //Constructor;
  function TMDBTranslation($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> code        = $basicValues['iso_639_1'];
    $this -> name        = $basicValues['name'];
    $this -> englishName = $basicValues['english_name'];
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

  function getEnglishName(){
    return $this -> englishName;
  }

  function setEnglishName($v){
    $this -> englishName = $v;
  }
}
?>