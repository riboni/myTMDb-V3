<?php
class TMDBChange{
  //Variables;
  var $key;
  var $items;

  //Constructor;
  function TMDBChange($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> key   = $basicValues['key'];
    $this -> items = $basicValues['items'];
  }

  //Methods;
  function getKey(){
    return $this -> key;
  }

  function setKey($v){
    $this -> key = $v;
  }

  function getItems(){
    return $this -> items;
  }

  function setItems($v){
    $this -> items = $v;
  }
}
?>