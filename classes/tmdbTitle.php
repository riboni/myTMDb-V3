<?php
class TMDBTitle{
  //Variables;
  var $language;
  var $title;

  //Constructor;
  function TMDBTitle($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> language = $basicValues['iso_3166_1'];
    $this -> title    = $basicValues['title'];
  }

  //Methods;
  function getLanguage(){
    return $this -> language;
  }

  function setLanguage($v){
    $this -> language = $v;
  }

  function getTitle(){
    return $this -> title;
  }

  function setTitle($v){
    $this -> title = $v;
  }
}
?>