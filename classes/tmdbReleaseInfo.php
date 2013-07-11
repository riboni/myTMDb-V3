<?php
class TMDBReleaseInfo{
  //Variables;
  var $certification;
  var $code;
  var $releaseDate;

  //Constructor;
  function TMDBReleaseInfo($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> certification = $basicValues['certification'];
    $this -> code          = $basicValues['iso_3166_1'];
    $this -> releaseDate   = $basicValues['release_date'];
  }

  //Methods;
  function getCertification(){
    return $this -> certification;
  }

  function setCertification($v){
    $this -> certification = $v;
  }

  function getCode(){
    return $this -> code;
  }

  function setCode($v){
    $this -> code = $v;
  }

  function getReleaseDate(){
    return $this -> releaseDate;
  }

  function setReleaseDate($v){
    $this -> releaseDate = $v;
  }
}
?>