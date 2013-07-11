<?php
class TMDBReview{
  //Variables;
  var $id;
  var $author;
  var $content;
  var $language;
  var $mediaId;
  var $mediaTitle;
  var $mediaType;
  var $url;

  //Constructor;
  function TMDBReview($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> id      = $basicValues['id'];
    $this -> author  = $basicValues['author'];
    $this -> content = $basicValues['content'];
    if( isset( $basicValues['iso_639_1'] ) ){
      $this -> language = $basicValues['iso_639_1'];
    }
    if( isset( $basicValues['media_id'] ) ){
      $this -> mediaId = $basicValues['media_id'];
    }
    if( isset( $basicValues['media_title'] ) ){
      $this -> mediaTitle = $basicValues['media_title'];
    }
    if( isset( $basicValues['media_type'] ) ){
      $this -> mediaType = $basicValues['media_type'];
    }
    $this -> url     = $basicValues['url'];
  }

  //Methods;
  function getId(){
    return $this -> id;
  }

  function setId($v){
    $this -> id = $v;
  }

  function getAuthor(){
    return $this -> author;
  }

  function setAuthor($v){
    $this -> author = $v;
  }

  function getContent(){
    return $this -> content;
  }

  function setContent($v){
    $this -> content = $v;
  }

  function getLanguage(){
    return $this -> language;
  }

  function setLanguage($v){
    $this -> language = $v;
  }

  function getMediaId(){
    return $this -> mediaId;
  }

  function setMediaId($v){
    $this -> mediaId = $v;
  }

  function getMediaTitle(){
    return $this -> mediaTitle;
  }

  function setMediaTitle($v){
    $this -> mediaTitle = $v;
  }

  function getMediaType(){
    return $this -> mediaType;
  }

  function setMediaType($v){
    $this -> mediaType = $v;
  }

  function getUrl(){
    return $this -> url;
  }

  function setUrl($v){
    $this -> url = $v;
  }
}
?>