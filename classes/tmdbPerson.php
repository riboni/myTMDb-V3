<?php
class TMDBPerson{
  //Variables;
  var $id;
  var $name;
  var $adult;
  var $profilePath;
  var $biography;
  var $birthday;
  var $deathday;
  var $homepage;
  var $placeOfBirth;

  //Lists;
  var $alsoKnownAs = array();
  var $images      = array();
  var $cast        = array();
  var $crew        = array();

  //Constructor;
  function TMDBPerson($basicValues = false, $fullDetails = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues, $fullDetails);
    }
  }

  function loadBasicValues($basicValues, $fullDetails = false){
    $this -> id          = $basicValues['id'];
    $this -> name        = $basicValues['name'];
    $this -> adult       = $basicValues['adult'];
    $this -> profilePath = $basicValues['profile_path'];
    if( $fullDetails === true ){
      $this -> alsoKnownAs  = $basicValues['also_known_as'];
      $this -> biography    = $basicValues['biography'];
      $this -> birthday     = $basicValues['birthday'];
      $this -> deathday     = $basicValues['deathday'];
      $this -> homepage     = $basicValues['homepage'];
      $this -> placeOfBirth = $basicValues['place_of_birth'];
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

  function getAdult(){
    return $this -> adult;
  }

  function setAdult($v){
    $this -> adult = $v;
  }

  function getProfilePath(){
    return $this -> profilePath;
  }

  function setProfilePath($v){
    $this -> profilePath = $v;
  }

  function getBiography(){
    return $this -> biography;
  }

  function setBiography($v){
    $this -> biography = $v;
  }

  function getBirthday(){
    return $this -> birthday;
  }

  function setBirthday($v){
    $this -> birthday = $v;
  }

  function getDeathday(){
    return $this -> deathday;
  }

  function setDeathday($v){
    $this -> deathday = $v;
  }

  function getHomepage(){
    return $this -> homepage;
  }

  function setHomepage($v){
    $this -> homepage = $v;
  }

  function getPlaceOfBirth(){
    return $this -> placeOfBirth;
  }

  function setPlaceOfBirth($v){
    $this -> placeOfBirth = $v;
  }

  function getAlsoKnownAs(){
    return $this -> alsoKnownAs;
  }

  function setAlsoKnownAs($v){
    $this -> alsoKnownAs = $v;
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
  function isAdult(){
    return $this -> getAdult();
  }

  function getCast(){
    return $this -> cast;
  }

  function setCast($casting){
    if( is_array( $casting ) && sizeof( $casting ) > 0 ){
      $this -> cast = $casting;
    }else{
      return false;
    }
  }

  function getCrew(){
    return $this -> crew;
  }

  function setCrew($crew){
    if( is_array( $crew ) && sizeof( $crew ) > 0 ){
      $this -> crew = $crew;
    }else{
      return false;
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
  
  function hasBiography(){
    if( $this -> getBiography() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasDeathday(){
    if( $this -> getDeathday() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasPlaceOfBirth(){
    if( $this -> getPlaceOfBirth() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasImages(){
    if( is_array( $this -> images ) && sizeof( $this -> images ) > 0 ){
      return true;
    }else{
      return false;
    }
  }

  function hasCast(){
    if( is_array( $this -> cast ) && sizeof( $this -> cast ) > 0 ){
      return true;
    }else{
      return false;
    }
  }

  function hasCrew(){
    if( is_array( $this -> crew ) && sizeof( $this -> crew ) > 0 ){
      return true;
    }else{
      return false;
    }
  }
}
?>