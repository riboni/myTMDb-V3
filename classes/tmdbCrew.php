<?php
class TMDBCrew{
  //Variables;
  var $id;
  var $name;
  var $department;
  var $job;
  var $profilePath;

  //Constructor;
  function TMDBCrew($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id          = $basicValues['id'];
    $this -> name        = $basicValues['name'];
    $this -> department  = $basicValues['department'];
    $this -> job         = $basicValues['job'];
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

  function getProfilePath(){
    return $this -> profilePath;
  }

  function setProfilePath($v){
    $this -> profilePath = $v;
  }

  //Alias;
  function getFullJob(){
    if( $this -> getDepartment() === '' ){
      return $this -> job;
    }else{
      return $this -> job.' ('.$this -> department.')';
    }
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