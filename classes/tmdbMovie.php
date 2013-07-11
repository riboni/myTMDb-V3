<?php
class TMDBMovie{
  //Variables;
  var $id;
  var $title;
  var $originalTitle;
  var $backdropPath;
  var $posterPath;
  var $releaseDate;
  var $popularity;
  var $voteAverage;
  var $voteCount;
  var $adult;
  var $rating;
  var $budget;
  var $imdbId;
  var $homepage;
  var $overview;
  var $revenue;
  var $runtime;
  var $spokenLanguages;
  var $tagline;

  //Objects;
  var $belongsToCollection = false;

  //Lists;
  var $genres              = array();
  var $productionCompanies = array();
  var $productionCountries = array();
  var $cast                = array();
  var $crew                = array();
  var $trailers            = array();
  var $images              = array();
  var $translations        = array();
  var $alternativeTitles   = array();
  var $keywords            = array();
  var $releases            = array();

  //Constructor;
  function TMDBMovie($basicValues = false, $fullDetails = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues, $fullDetails);
    }
  }

  //Load methods;
  function loadBasicValues($basicValues, $fullDetails = false){
    $this -> id            = $basicValues['id'];
    $this -> title         = $basicValues['title'];
    $this -> backdropPath  = $basicValues['backdrop_path'];
    $this -> posterPath    = $basicValues['poster_path'];
    $this -> releaseDate   = $basicValues['release_date'];
    if( isset( $basicValues['original_title'] ) ){
      $this -> originalTitle = $basicValues['original_title'];
    }
    if( isset( $basicValues['vote_average'] ) ){
      $this -> voteAverage   = $basicValues['vote_average'];
    }
    if( isset( $basicValues['vote_count'] ) ){
      $this -> voteCount     = $basicValues['vote_count'];
    }
    if( isset( $basicValues['popularity'] ) ){
      $this -> popularity = $basicValues['popularity'];
    }
    if( isset( $basicValues['adult'] ) ){
      $this -> adult = $basicValues['adult'];
    }
    if( isset( $basicValues['rating'] ) ){
      $this -> rating = $basicValues['rating'];
    }
    if( $fullDetails === true ){
      $this -> budget   = $basicValues['budget'];
      $this -> imdbId   = $basicValues['imdb_id'];
      $this -> homepage = $basicValues['homepage'];
      $this -> overview = $basicValues['overview'];
      $this -> revenue  = $basicValues['revenue'];
      $this -> runtime  = $basicValues['runtime'];
      $this -> tagline  = $basicValues['tagline'];
    }
  }

  //Methods;
  function getId(){
    return $this -> id;
  }

  function setId($v){
    $this -> id = $v;
  }

  function getTitle(){
    return $this -> title;
  }

  function setTitle($v){
    $this -> title = $v;
  }

  function getOriginalTitle(){
    return $this -> originalTitle;
  }

  function setOriginalTitle($v){
    $this -> originalTitle = $v;
  }

  function getBackdropPath(){
    return $this -> backdropPath;
  }

  function setBackdropPath($v){
    $this -> backdropPath = $v;
  }

  function getPosterPath(){
    return $this -> posterPath;
  }

  function setPosterPath($v){
    $this -> posterPath = $v;
  }

  function getReleaseDate(){
    return $this -> releaseDate;
  }

  function setReleaseDate($v){
    $this -> releaseDate = $v;
  }

  function getPopularity(){
    return $this -> popularity;
  }

  function setPopularity($v){
    $this -> popularity = $v;
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

  function getAdult(){
    return $this -> adult;
  }

  function setAdult($v){
    $this -> adult = $v;
  }

  function getRating(){
    return $this -> rating;
  }

  function setRating($v){
    $this -> rating = $v;
  }

  function getBudget(){
    return $this -> budget;
  }

  function setBudget($v){
    $this -> budget = $v;
  }

  function getImdbId(){
    return $this -> imdbId;
  }

  function setImdbId($v){
    $this -> imdbId = $v;
  }

  function getHomepage(){
    return $this -> homepage;
  }

  function setHomepage($v){
    $this -> homepage = $v;
  }

  function getOverview(){
    return $this -> overview;
  }

  function setOverview($v){
    $this -> overview = $v;
  }

  function getRevenue(){
    return $this -> revenue;
  }

  function setRevenue($v){
    $this -> revenue = $v;
  }

  function getRuntime(){
    return $this -> runtime;
  }

  function setRuntime($v){
    $this -> runtime = $v;
  }

  function getSpokenLanguages(){
    return $this -> spokenLanguages;
  }

  function setSpokenLanguages($v){
    $this -> spokenLanguages = $v;
  }

  function getTagline(){
    return $this -> tagline;
  }

  function setTagline($v){
    $this -> tagline = $v;
  }

  function getGenres(){
    return $this -> genres;
  }

  function setGenres($v){
    $this -> genres = $v;
  }

  function getBelongsToCollection(){
    return $this -> belongsToCollection;
  }

  function setBelongsToCollection($v){
    $this -> belongsToCollection = $v;
  }

  function getProductionCompanies(){
    return $this -> productionCompanies;
  }

  function setProductionCompanies($v){
    $this -> productionCompanies = $v;
  }

  function getProductionCountries(){
    return $this -> productionCountries;
  }

  function setProductionCountries($v){
    $this -> productionCountries = $v;
  }

  function getCast($order = false){
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

  function getTranslations(){
    return $this -> translations;
  }

  function setTranslations($translations){
    if( is_array( $translations ) && sizeof( $translations ) > 0 ){
      $this -> translations = $translations;
    }else{
      return false;
    }
  }

  function getAlternativeTitles(){
    return $this -> alternativeTitles;
  }

  function setAlternativeTitles($alternativeTitles){
    if( is_array( $alternativeTitles ) && sizeof( $alternativeTitles ) > 0 ){
      $this -> alternativeTitles = $alternativeTitles;
    }else{
      return false;
    }
  }

  function getKeywords(){
    return $this -> keywords;
  }

  function setKeywords($keywords){
    if( is_array( $keywords ) && sizeof( $keywords ) > 0 ){
      $this -> keywords = $keywords;
    }else{
      return false;
    }
  }

  function getReleases(){
    return $this -> releases;
  }

  function setReleases($releases){
    if( is_array( $releases ) && sizeof( $releases ) > 0 ){
      $this -> releases = $releases;
    }else{
      return false;
    }
  }

  function getTrailers($type = false){
    if( $type === false ){
      return $this -> trailers;
    }else{
      if( isset( $this -> trailers[ $type ] ) ){
        return $this -> trailers[ $type ];
      }else{
        return false;
      }
    }
  }

  function setTrailers($trailers, $type){
    if( is_array( $trailers ) && sizeof( $trailers ) > 0 ){
      $this -> trailers[ $type ] = $trailers;
    }else{
      return false;
    }
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

  function getCollection(){
    return $this -> getBelongsToCollection();
  }

  function setCollection($v){
    return $this -> setBelongsToCollection($v);
  }

  function getFullTitle(){
    if( $this -> title == $this -> originalTitle ){
      return $this -> title;
    }else{
      if( $this -> originalTitle == '' ){
        return $this -> title;
      }else{
        return $this -> title.' ('.$this -> originalTitle.')';
      }
    }
  }

  function getCastTotal(){
    if( is_array( $this -> cast ) ){
      return sizeof( $this -> cast );
    }else{
      return 0;
    }
  }

  function getImagesTotal(){
    if( is_array( $this -> images ) ){
      $totalCount = 0;
      if( is_array( $this -> images ) && sizeof( $this -> images ) > 0 ){
        foreach($this -> images as $k => $images){
          $totalCount += sizeof( $images );
        }
      }
      return $totalCount;
    }else{
      return 0;
    }
  }

  function getTrailersTotal(){
    if( is_array( $this -> trailers ) ){
      $totalCount = 0;
      if( is_array( $this -> trailers ) && sizeof( $this -> trailers ) > 0 ){
        foreach($this -> trailers as $k => $trailers){
          $totalCount += sizeof( $trailers );
        }
      }
      return $totalCount;
    }else{
      return 0;
    }
  }

  //Has methods;
  function hasCollection(){
    if( $this -> belongsToCollection !== false ){
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

  function hasImdbLink(){
    if( $this -> getImdbId() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasHomepage(){
    if( $this -> getHomepage() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasBudget(){
    if( $this -> getBudget() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasRevenue(){
    if( $this -> getRevenue() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasRuntime(){
    if( $this -> getRuntime() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasGenres(){
    if( is_array( $this -> genres ) && sizeof( $this -> genres ) > 0 ){
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

  function hasImages(){
    if( is_array( $this -> images ) && sizeof( $this -> images ) > 0 ){
      return true;
    }else{
      return false;
    }
  }

  function hasTranslations(){
    if( is_array( $this -> translations ) && sizeof( $this -> translations ) > 0 ){
      return true;
    }else{
      return false;
    }
  }

  function hasProductionCompanies(){
    if( is_array( $this -> productionCompanies ) && sizeof( $this -> productionCompanies ) > 0 ){
      return true;
    }else{
      return false;
    }
  }

  function hasTrailer($traillerType = false){
    if( $traillerType === false ){
      if( is_array( $this -> trailers ) && sizeof( $this -> trailers ) > 0 ){
        return true;
      }else{
        return false;
      }
    }else{
      if( isset( $this -> trailers[ $traillerType ] ) && is_array( $this -> trailers[ $traillerType ] ) && sizeof( $this -> trailers[ $traillerType ] ) > 0 ){
        return true;
      }else{
        return false;
      }
    }
  }

  function hasOverview(){
    if( $this -> getOverview() != '' ){
      return true;
    }else{
      return false;
    }
  }

  function hasTagline(){
    if( $this -> getTagline() != '' ){
      return true;
    }else{
      return false;
    }
  }
}
?>