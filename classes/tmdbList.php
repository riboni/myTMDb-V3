<?php
class TMDBList{
  //Variables;
  var $id;
  var $name;
  var $description;
  var $favoriteCount;
  var $itemCount;
  var $language;
  var $listType;
  var $posterPath;

  //Lists;
  var $items = array();

  //Constructor;
  function TMDBList($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id            = $basicValues['id'];
    $this -> name          = $basicValues['name'];
    $this -> description   = $basicValues['description'];
    $this -> favoriteCount = $basicValues['favorite_count'];
    $this -> itemCount     = $basicValues['item_count'];
    $this -> language      = $basicValues['iso_639_1'];
    $this -> posterPath    = $basicValues['poster_path'];
    if( isset( $basicValues['list_type'] ) ){
      $this -> listType = $basicValues['list_type'];
    }
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

  function getDescription(){
    return $this -> description;
  }

  function setDescription($v){
    $this -> description = $v;
  }

  function getFavoriteCount(){
    return $this -> favoriteCount;
  }

  function setFavoriteCount($v){
    $this -> favoriteCount = $v;
  }

  function getItemCount(){
    return $this -> itemCount;
  }

  function setItemCount($v){
    $this -> itemCount = $v;
  }

  function getLanguage(){
    return $this -> language;
  }

  function setLanguage($v){
    $this -> language = $v;
  }

  function getListType(){
    return $this -> listType;
  }

  function setListType($v){
    $this -> listType = $v;
  }

  function getPosterPath(){
    return $this -> posterPath;
  }

  function setPosterPath($v){
    $this -> posterPath = $v;
  }

  function getItems(){
    return $this -> items;
  }

  function setItems($v){
    $this -> items = $v;
  }

  //Alias;
  function hasItems(){
    if( is_array( $this -> items ) && sizeof( $this -> items ) > 0 ){
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
}
?>