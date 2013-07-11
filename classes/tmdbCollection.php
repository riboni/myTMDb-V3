<?php
class TMDBCollection{
  //Variables;
  var $id;
  var $name;
  var $posterPath;
  var $backdropPath;

  //Lists;
  var $parts  = array();
  var $images = array();

  //Constructor;
  function TMDBCollection($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id           = $basicValues['id'];
    $this -> name         = $basicValues['name'];
    $this -> posterPath   = $basicValues['poster_path'];
    $this -> backdropPath = $basicValues['backdrop_path'];
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

  function getPosterPath(){
    return $this -> posterPath;
  }

  function setPosterPath($v){
    $this -> posterPath = $v;
  }

  function getBackdropPath(){
    return $this -> backdropPath;
  }

  function setBackdropPath($v){
    $this -> backdropPath = $v;
  }

  function getParts(){
    return $this -> parts;
  }

  function setParts($v){
    $this -> parts = $v;
  }

  function getImages($type = false){
    if( $type === false ){
      return $this -> images;
    }else{
      if( isset( $this -> images[ $type ] ) ){
        return $this -> images[ $type ];
      }else{
        return false;
      }
    }
  }

  function setImages($images, $type){
    if( is_array( $images ) && sizeof( $images ) > 0 ){
      $this -> images[ $type ] = $images;
    }else{
      return false;
    }
  }

  //Alias;
  function hasParts(){
    if( is_array( $this -> parts ) && sizeof( $this -> parts ) > 0 ){
      return true;
    }else{
      return false;
    }
  }

  function hasPoster(){
    if( $this -> getPosterPath() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasBackdrop(){
    if( $this -> getBackdropPath() != '' ){
      return true;
    }else{
      return false;
    }
  }
}
?>