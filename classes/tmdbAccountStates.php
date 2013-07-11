<?php
class TMDBAccountState{
  //Variables;
  var $id;
  var $favorite;
  var $rated;
  var $watchlist;


  //Constructor;
  function TMDBAccountState($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id        = $basicValues['id'];
    $this -> favorite  = $basicValues['favorite'];
    $this -> watchlist = $basicValues['watchlist'];
    if( is_array( $basicValues['rated'] ) ){
      $this -> rated = array_shift( $basicValues['rated'] );
    }else{
      $this -> rated = $basicValues['rated'];
    }
  }

  //Methods;
  function getId(){
    return $this -> id;
  }

  function setId($v){
    $this -> id = $v;
  }

  function getFavorite(){
    return $this -> favorite;
  }

  function setFavorite($v){
    $this -> favorite = $v;
  }

  function getRated(){
    return $this -> rated;
  }

  function setRated($v){
    $this -> rated = $v;
  }

  function getWatchlist(){
    return $this -> watchlist;
  }

  function setWatchlist($v){
    $this -> watchlist = $v;
  }
}
?>