<?php
class TMDBCreditCrew{
  //Variables;
  var $id;
  var $title;
  var $originalTitle;
  var $department;
  var $job;
  var $posterPath;
  var $releaseDate;

  //Constructor;
  function TMDBCreditCrew($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id            = $basicValues['id'];
    $this -> title         = $basicValues['title'];
    $this -> originalTitle = $basicValues['original_title'];
    $this -> department    = $basicValues['department'];
    $this -> job           = $basicValues['job'];
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

  function getDepartment(){
    return $this -> department;
  }

  function setDepartment($v){
    $this -> department = $v;
  }

  function getJob(){
    return $this -> job;
  }

  function setJob($v){
    $this -> job = $v;
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