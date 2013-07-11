<?php
class TMDBCreditCast{
  //Variables;
  var $id;
  var $title;
  var $originalTitle;
  var $character;
  var $posterPath;
  var $releaseDate;

  //Constructor;
  function TMDBCreditCast($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id            = $basicValues['id'];
    $this -> title         = $basicValues['title'];
    $this -> originalTitle = $basicValues['original_title'];
    $this -> character     = $basicValues['character'];
    $this -> posterPath    = $basicValues['poster_path'];
    $this -> releaseDate   = $basicValues['release_date'];
  }

  //Methods;
  function getId(){
    return $this -> id;
  }

  function setId($v){
    $this -> id = $v;
  }

  function getTitle(){
    return $this -> title;
  }

  function setTitle($v){
    $this -> title = $v;
  }

  function getOriginalTitle(){
    return $this -> originalTitle;
  }

  function setOriginalTitle($v){
    $this -> originalTitle = $v;
  }

  function getCharacter(){
    return $this -> character;
  }

  function setCharacter($v){
    $this -> character = $v;
  }

  function getPosterPath(){
    return $this -> posterPath;
  }

  function setPosterPath($v){
    $this -> posterPath = $v;
  }

  function getReleaseDate(){
    return $this -> releaseDate;
  }

  function setReleaseDate($v){
    $this -> releaseDate = $v;
  }

  //Has methods;
  function hasPoster(){
    if( $this -> getPosterPath() != '' ){
      return true;
    }else{
      return false;
    }
  }
}
?>