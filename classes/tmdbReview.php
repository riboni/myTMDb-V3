<?php
class TMDBReview{
  //Variables;
  var $id;
  var $author;
  var $content;
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

  function getUrl(){
    return $this -> url;
  }

  function setUrl($v){
    $this -> url = $v;
  }
}
?>