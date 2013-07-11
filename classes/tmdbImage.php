<?php
class TMDBImage{
  //Variables;
  var $filePath;
  var $width;
  var $height;
  var $iso6391;
  var $aspectRatio;
  var $voteAverage;
  var $voteCount;
  var $type;

  //Constructor;
  function TMDBImage($basicValues = false, $type = false){
    if( is_array( $basicValues ) && $type !== false ){
      $this -> loadBasicValues($basicValues, $type);
    }
  }

  function loadBasicValues($basicValues, $type){
    $this -> filePath    = $basicValues['file_path'];
    $this -> width       = $basicValues['width'];
    $this -> height      = $basicValues['height'];
    $this -> iso6391     = $basicValues['iso_639_1'];
    $this -> aspectRatio = $basicValues['aspect_ratio'];
    $this -> type        = $type;
    if( isset( $basicValues['vote_average'] ) ){
      $this -> voteAverage = $basicValues['vote_average'];
    }
    if( isset( $basicValues['vote_count'] ) ){
      $this -> voteCount = $basicValues['vote_count'];
    }
  }

  //Methods;
  function getFilePath(){
    return $this -> filePath;
  }

  function setFilePath($v){
    $this -> filePath = $v;
  }

  function getWidth(){
    return $this -> width;
  }

  function setWidth($v){
    $this -> width = $v;
  }

  function getHeight(){
    return $this -> height;
  }

  function setHeight($v){
    $this -> height = $v;
  }

  function getIso6391(){
    return $this -> iso6391;
  }

  function setIso6391($v){
    $this -> iso6391 = $v;
  }

  function getAspectRatio(){
    return $this -> aspectRatio;
  }

  function setAspectRatio($v){
    $this -> aspectRatio = $v;
  }

  function getVoteAverage(){
    return $this -> voteAverage;
  }

  function setVoteAverage($v){
    $this -> voteAverage = $v;
  }

  function getVoteCount(){
    return $this -> voteCount;
  }

  function setVoteCount($v){
    $this -> voteCount = $v;
  }

  function getType(){
    return $this -> type;
  }

  function setType($v){
    $this -> type = $v;
  }

  //Alias;
  function getSize(){
    return $this -> width.'&nbsp;x&nbsp;'.$this -> height;
  }
}
?>