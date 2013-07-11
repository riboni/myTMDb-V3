<?php
class TMDBTrailer{
  //Variables;
  var $name;
  var $size;
  var $source;
  var $type;

  //Constructor;
  function TMDBTrailer($basicValues = false, $type = false){
    if( is_array( $basicValues ) && $type !== false ){
      $this -> loadBasicValues($basicValues, $type);
    }
  }

  function loadBasicValues($basicValues, $type){
    $this -> name   = $basicValues['name'];
    $this -> type   = $type;
    if( isset( $basicValues['source'] ) ){
      $this -> source = $basicValues['source'];
    }
    if( isset( $basicValues['size'] ) ){
      $this -> size   = $basicValues['size'];
    }
  }

  //Methods;
  function getName(){
    return $this -> name;
  }

  function setName($v){
    $this -> name = $v;
  }

  function getSize(){
    return $this -> size;
  }

  function setSize($v){
    $this -> size = $v;
  }

  function getSource(){
    return $this -> source;
  }

  function setSource($v){
    $this -> source = $v;
  }

  function getType(){
    return $this -> type;
  }

  function setType($v){
    $this -> type = $v;
  }
}
?>