<?php
if( is_file('your.app.key.php') ){
  include_once('your.app.key.php');
}else{
  $tmdbKey = 'YOUR_APP_KEY';
}

//Load the classes;
include("classes/tmdb.php");

//Start whith the key;
$TMDB = new TMDB($tmdbKey);

//Set the language;
$TMDB -> setLanguage('en');

//Show adult content;
$TMDB -> showAdultContent();

//Debug;
$TMDB -> saveDebug();
?>
<!DOCTYPE html>
<html lang='pt'>
<head>
  <TITLE>myTMDB V3 (Live demo)</TITLE>
  <META NAME='Author' CONTENT='Giuliano Riboni Osorio - http://giuliano.riboni.com.br'/>
  <META NAME='Version' CONTENT='<?php echo $TMDB -> getVersion(); ?>'/>
  <META NAME='Year' CONTENT='2013'/>
  <META NAME='Date-Creation-ddmmyyyy' CONTENT='12072013'/>
  <META NAME='Date-Revision-ddmmyyyy' CONTENT='12072013'/>
  <META NAME='Robots' CONTENT='index, follow, all'/>
  <META NAME='Revisit-After' CONTENT='7 Days'/>
  <META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'/>
  <META HTTP-EQUIV='Content-Script-Type' CONTENT='text/javascript'/>
  <META HTTP-EQUIV='Pragma' CONTENT='no-cache'/>
  <META HTTP-EQUIV='Expires' CONTENT='-1'/>
  <META NAME='viewport' CONTENT='width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable = no'/>
  <META NAME='format-detection' CONTENT='telephone=no'/>
  <META NAME='apple-mobile-web-app-capable' CONTENT='no'/>
  <LINK HREF='_htmlContent/bootstrap/css/bootstrap.min.css?<?php echo $TMDB -> getVersion(); ?>' REL='stylesheet' TYPE='text/css' MEDIA='screen, projection'/>
  <LINK HREF='_htmlContent/bootstrap/css/bootstrap-responsive.min.css?<?php echo $TMDB -> getVersion(); ?>' REL='stylesheet' TYPE='text/css' MEDIA='screen, projection'/>
  <style>
    @media (max-width: 979px){
      /* Remove any padding from the body */
      body {
        padding-top:    0 !important;
        height:         100% !important;
        position:       relative;
      }

      html{
        height:         100% !important;
        position:       relative;
      }

      #navBarMenu{
        display: none;
      }

      #navTopBarMenu{
        display: block !important;
      }
    }
    body{
      padding-top:    55px;
    }
    section{
      padding-top: 55px;
    }
    .menuSize{
      width: 170px;
    }
    #navTopBarMenu{
      display: none;
    }
  </style>
</head>
<body data-spy="scroll" data-target="#navBarMenu" data-offset="10">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="http://tmdb.giulianoweb.com.br">myTMDB <?php echo $TMDB -> getTMDBVersion(); ?> (Live demo)</a>
      <div class="nav-collapse collapse">
        <ul class="nav" id="navTopBarMenu">
          <li><a href="#About">About</a></li>
          <li><a href="#HowToStart">How To Start</a></li>
          <li><a href="#Configuration">Configuration</a></li>
          <li><a href="#Authentication">Authentication</a></li>
          <li><a href="#Account">Account</a></li>
          <li><a href="#Movies">Movies</a></li>
          <li><a href="#Collections">Collections</a></li>
          <li><a href="#People">People</a></li>
          <li><a href="#Lists">Lists</a></li>
          <li><a href="#Companies">Companies</a></li>
          <li><a href="#Genres">Genres</a></li>
          <li><a href="#Keywords">Keywords</a></li>
          <li><a href="#Discover">Discover</a></li>
          <li><a href="#Search">Search</a></li>
          <li><a href="#Reviews">Reviews</a></li>
          <li><a href="#Changes">Changes</a></li>
          <li><a href="#Jobs">Jobs</a></li>
          <li><a href="#Examples">Examples</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid">
  <div class="container">
    <div class="row-fluid">
      <div class="span2" id="navBarMenu">
        <ul class="nav nav-tabs nav-stacked affix menuSize">
          <li><a href="#About">About</a></li>
          <li><a href="#HowToStart">How To Start</a></li>
          <li><a href="#Configuration">Configuration</a></li>
          <li><a href="#Authentication">Authentication</a></li>
          <li><a href="#Account">Account</a></li>
          <li><a href="#Movies">Movies</a></li>
          <li><a href="#Collections">Collections</a></li>
          <li><a href="#People">People</a></li>
          <li><a href="#Lists">Lists</a></li>
          <li><a href="#Companies">Companies</a></li>
          <li><a href="#Genres">Genres</a></li>
          <li><a href="#Keywords">Keywords</a></li>
          <li><a href="#Discover">Discover</a></li>
          <li><a href="#Search">Search</a></li>
          <li><a href="#Reviews">Reviews</a></li>
          <li><a href="#Changes">Changes</a></li>
          <li><a href="#Jobs">Jobs</a></li>
          <li><a href="#Examples">Examples</a></li>
        </ul>
      </div>
      <div class="span10">
        <h2>myTMDB <?php echo $TMDB -> getTMDBVersion(); ?> (live demo)</h2>
        <section id="About">
          <h3>About</h3>
          <p>This is my PHP version of a wrapper to use with TheMovieDatabase API.</p>
          <p>Class Version: <?php echo $TMDB -> getVersion(); ?>.</p>
          <p>Last Update: <?php echo $TMDB -> getLastUpdate(); ?>.</p>
          <p>Live Demo: <a href="live.php" target="_blank">Click Here</a>.</p>
        </section>
        <section id="HowToStart">
          <h3>How To Start</h3>
          <p class="text-success"><i class="icon-info-sign"></i> <em>Start the TMDB class object.</em></p>
<pre>
//Load the classes;
include("classes/tmdb.php");

//Start whith the key;
$TMDB = new TMDB('YOUR_APP_KEY_HERE');

//Set the language;
$TMDB -> setLanguage('en');

//Show adult content;
$TMDB -> showAdultContent();
</pre>
        </section>
        <section id="Configuration">
          <h3>Configuration</h3>
          <p>Those are the configuration methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getConfig</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/configuration</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the configuration from the TMDB API.</p>
<pre>
$TMDB -> getConfig();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>makeConfiguration</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Save the configuration into the class (This method is called in the constructor of the class.</p>
<pre>
$TMDB -> makeConfiguration();
</pre>
        </section>
        <section id="Authentication">
          <h3>Authentication</h3>
          <p>Those are the autentication methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>makeAuthenticationToken</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/authentication/token/new</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the new token an save it inside the class.</p>
<pre>
$TMDB -> makeAuthenticationToken();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAuthenticationTokenLink</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the correct link to validate the authentication token so you can get the session id with this token (Uses the saved authentication token inside the class to work).</p>
<pre>
$TMDB -> getAuthenticationTokenLink();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>setAuthenticationToken</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Set an old authentication token into the class as the session id.</p>
<pre>
$TMDB -> setAuthenticationToken($token, $expiresAt = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>makeAuthenticationSession</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/authentication/session/new</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the new session id an save it inside the class (Uses the saved authentication token inside the class to work).</p>
<pre>
$TMDB -> makeAuthenticationSession();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>makeAuthenticationGuestSession</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/authentication/guest_session/new</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the new guest session id an save it inside the class as the session id.</p>
<pre>
$TMDB -> makeAuthenticationGuestSession();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>setAuthenticationSessionId</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Set an old session id into the class as the session id.</p>
<pre>
$TMDB -> setAuthenticationSessionId($sessionId, $expiresAt = false);
</pre>
        </section>
        <section id="Account">
          <h3>Account</h3>
          <p>Those are the account methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>accountInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get account data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> accountInfo($accountId = false, $methodRaw = false, $parametersGet = false, $parametersPost = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>logIn</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the account object an save it inside the class (Uses the saved authentication session id inside the class to work).</p>
<pre>
$TMDB -> logIn();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAccountLists</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account/{id}/lists</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the account list of lists (Uses the authenticated account inside the class to work).</p>
<pre>
$TMDB -> getAccountLists($page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAccountFavoriteMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account/{id}/favorite_movies</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the account list of favorite movies (Uses the authenticated account inside the class to work).</p>
<pre>
$TMDB -> getAccountFavoriteMovies($page = false, $sortBy = false, $sortOrder = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>setAccountFavoriteMovie</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account/{id}/favorite</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Add/Remove a movie to/from the account list of favorite movies (Uses the authenticated account inside the class to work).</p>
          <p class="muted">&nbsp;&nbsp;&nbsp;&nbsp;<em>Action: true = add, false = remove</em></p>
<pre>
$TMDB -> setAccountFavoriteMovie($movieId, $action = true);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAccountRatedMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account/{id}/rated_movies</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the account list of rated movies (Uses the authenticated account inside the class to work).</p>
<pre>
$TMDB -> getAccountRatedMovies($page = false, $sortBy = false, $sortOrder = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAccountMovieWatchlist</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account/{id}/movie_watchlist</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the account list of watchlist movies (Uses the authenticated account inside the class to work).</p>
<pre>
$TMDB -> getAccountMovieWatchlist($page = false, $sortBy = false, $sortOrder = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>setAccountMovieWatchlist</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/account/{id}/movie_watchlist</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Add/Remove a movie to/from the account list of watchlist movies (Uses the authenticated account inside the class to work).</p>
          <p class="muted">&nbsp;&nbsp;&nbsp;&nbsp;<em>Action: true = add, false = remove</em></p>
<pre>
$TMDB -> setAccountMovieWatchlist($movieId, $action = true);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAccount</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the current account object.</p>
<pre>
$TMDB -> getAccount();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>isLogged</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return if there is an account current authenticated.</p>
<pre>
$TMDB -> isLogged();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>hasSession</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return if there is an session id defined in the class (Session id can be an account or a guest session).</p>
<pre>
$TMDB -> hasSession();
</pre>
        </section>
        <section id="Movies">
          <h3>Movies</h3>
          <p>Those are the movie methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get movie data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> movieInfo($movieId, $methodRaw = false, $parametersGet = false, $parametersPost = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieAlternativeTitles</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/alternative_titles</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie alternative titles (Used on load all of movie details).</p>
<pre>
$TMDB -> movieAlternativeTitles($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieCastAndCrew</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/casts</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie cast and crew (Used on load all of movie details).</p>
<pre>
$TMDB -> movieCastAndCrew($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieImages</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/images</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie posters and backdrops (Used on load all of movie details).</p>
<pre>
$TMDB -> movieImages($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieKeywords</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/keywords</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie keywords (Used on load all of movie details).</p>
<pre>
$TMDB -> movieKeywords($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieReleaseInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/releases</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie releases (Used on load all of movie details).</p>
<pre>
$TMDB -> movieReleaseInfo($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieTrailers</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/trailers</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie trailers (Used on load all of movie details).</p>
<pre>
$TMDB -> movieTrailers($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieTranslations</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/translations</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie translations (Used on load all of movie details).</p>
<pre>
$TMDB -> movieTranslations($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchSimilarMovie</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/similar_movies</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of similar movies for this movie.</p>
<pre>
$TMDB -> searchSimilarMovie($movieId, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieReviews</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/reviews</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of reviews for this movie.</p>
<pre>
$TMDB -> movieReviews($movieId, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieLists</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/lists</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of lists that this movie is on.</p>
<pre>
$TMDB -> movieLists($movieId, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieChanges</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/changes</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of changes for this movie.</p>
<pre>
$TMDB -> movieChanges($movieId, $startDate = false, $endDate = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getLatestMovie</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the latest movie inserted in the TMDB database.</p>
<pre>
$TMDB -> getLatestMovie($loadAll = false, $loadCastAndCrew = false, $loadTrailers = false, $loadImages = false, $loadTranslations = false, $loadAlternativeTitles = false, $loadKeywords = false, $loadReleasesInfo = false, $loadCollection = false, $loadProductionCompanies = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getLatestMovieId</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/latest</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the latest movie id inserted in the TMDB database.</p>
<pre>
$TMDB -> getLatestMovieId();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getUpcomingMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/upcoming</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of upcoming movies.</p>
<pre>
$TMDB -> getUpcomingMovies($page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getNowPlayingMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/now_playing</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of movies in theater.</p>
<pre>
$TMDB -> getNowPlayingMovies($page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getPopularMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/popular</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of popular movies.</p>
<pre>
$TMDB -> getPopularMovies($page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getTopRatedMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/top_rated</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of top rated movies.</p>
<pre>
$TMDB -> getTopRatedMovies($page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieAccountStates</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/account_states</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Check the current movie status in the account lists (Uses the authenticated account inside the class to work).</p>
<pre>
$TMDB -> movieAccountStates($movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieRating</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}/rating</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Rate the movie (Uses the authenticated account inside the class to work).</p>
<pre>
$TMDB -> movieRating($movieId, $rating);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie object.</p>
<pre>
$TMDB -> movieDetail($movieId, $loadAll = false, $loadCastAndCrew = false, $loadTrailers = false, $loadImages = false, $loadTranslations = false, $loadAlternativeTitles = false, $loadKeywords = false, $loadReleasesInfo = false, $loadCollection = false, $loadProductionCompanies = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getRandomMovie</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return one random movie object.</p>
<pre>
$TMDB -> getRandomMovie($loadAll = false, $loadCastAndCrew = false, $loadTrailers = false, $loadImages = false, $loadTranslations = false, $loadAlternativeTitles = false, $loadKeywords = false, $loadReleasesInfo = false, $loadCollection = false, $loadProductionCompanies = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getRandomMovieWithBackdrop</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return one random movie object mandatorily with backdrop.</p>
<pre>
$TMDB -> getRandomMovieWithBackdrop($loadAll = false, $loadCastAndCrew = false, $loadTrailers = false, $loadImages = false, $loadTranslations = false, $loadAlternativeTitles = false, $loadKeywords = false, $loadReleasesInfo = false, $loadCollection = false, $loadProductionCompanies = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getPopularMovieWithBackdrop</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return one random popular movie object mandatorily with backdrop.</p>
          <p class="muted">&nbsp;&nbsp;&nbsp;&nbsp;<em>Set the minimum avarage vote value with "setVoteAvarageMinimum"</em></p>
<pre>
$TMDB -> getPopularMovieWithBackdrop($loadAll = false, $loadCastAndCrew = false, $loadTrailers = false, $loadImages = false, $loadTranslations = false, $loadAlternativeTitles = false, $loadKeywords = false, $loadReleasesInfo = false, $loadCollection = false, $loadProductionCompanies = false);
</pre>
        </section>
        <section id="Collections">
          <h3>Collections</h3>
          <p>Those are the collections methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>collectionInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get collections data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> collectionInfo($collectionId, $methodRaw = false, $parameters = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>collectionImages</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/collection/{id}/images</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the collection images (Used on load all of collection details).</p>
<pre>
$TMDB -> collectionImages($collectionId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>collectionDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/collection/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the collection object.</p>
<pre>
$TMDB -> collectionDetail($collectionId, $loadAll = false, $loadImages = false);
</pre>
        </section>
        <section id="People">
          <h3>People</h3>
          <p>Those are the people methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>personInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get people data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> personInfo($personId, $methodRaw = false, $parameters = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>personCastAndCrew</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/person/{id}/credits</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the person jobs on movies (Used on load all of collection details).</p>
<pre>
$TMDB -> personCastAndCrew($personId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>personImages</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/person/{id}/images</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the person images (Used on load all of collection details).</p>
<pre>
$TMDB -> personImages($personId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>personChanges</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/person/{id}/changes</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of changes for this person.</p>
<pre>
$TMDB -> personChanges($personId, $startDate = false, $endDate = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getPopularPersons</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/person/popular</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of popular persons.</p>
<pre>
$TMDB -> getPopularPersons($page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getLatestPerson</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the latest person inserted in the TMDB database.</p>
<pre>
$TMDB ->  getLatestPerson($loadAll = false, $loadCastAndCrew = false, $loadImages = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getLatestPersonId</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/person/latest</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the latest person id inserted in the TMDB database.</p>
<pre>
$TMDB -> getLatestPersonId();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>personDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/person/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the person object.</p>
<pre>
$TMDB -> personDetail($personId, $loadAll = false, $loadCastAndCrew = false, $loadImages = false);
</pre>
        </section>
        <section id="Lists">
          <h3>Lists</h3>
          <p>Those are the lists methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>listInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get list data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> listInfo($listId, $methodRaw = false, $parametersGet = false, $parametersPost = false, $customRequest = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>listItemStatus</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/list/{id}/item_status</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie presence status on this list.</p>
<pre>
$TMDB -> listItemStatus($listId, $movieId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>addList</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/list</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Create a new list.</p>
<pre>
$TMDB -> addList($name, $description);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>addListMedia</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/list/{id}/add_item</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Add an element to this list.</p>
<pre>
$TMDB -> addListMedia($listId, $mediaId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>removeListMedia</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/list/{id}/remove_item</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Remove an element from this list.</p>
<pre>
$TMDB -> removeListMedia($listId, $mediaId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>removeList</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/list/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Remove an element from this list.</p>
<pre>
$TMDB -> removeList($listId);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>listDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/list/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list object.</p>
<pre>
$TMDB -> listDetail($listId);
</pre>
        </section>
        <section id="Companies">
          <h3>Companies</h3>
          <p>Those are the lists methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>companyInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get company data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> companyInfo($companyId, $methodRaw = false, $parameters = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>companyMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/company/{id}/movies</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movies from this company.</p>
<pre>
$TMDB -> companyMovies($companyId, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>companyDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/company/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the company object.</p>
<pre>
$TMDB -> companyDetail($companyId, $loadAll = false);
</pre>
        </section>
        <section id="Genres">
          <h3>Genres</h3>
          <p>Those are the lists methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>genreInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get genre data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> genreInfo($genreId, $methodRaw = false, $parameters = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>genreList</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/genre/list</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the genre list from the TMDB.</p>
<pre>
$TMDB -> genreList();
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>genreMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/genre/{id}/movies</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of movies for this genre.</p>
<pre>
$TMDB -> genreMovies($genreId, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>genreDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/genre/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the genre object.</p>
<pre>
$TMDB -> genreDetail($genreId, $loadAll = false);
</pre>
        </section>
        <section id="Keywords">
          <h3>Keywords</h3>
          <p>Those are the keywords methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>keywordInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get keyword data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> keywordInfo($keywordId, $methodRaw = false, $parameters = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>keywordMovies</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/keyword/{id}/movies</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of movies for this keyword.</p>
<pre>
$TMDB -> keywordMovies($keywordId, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>keywordDetail</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/keyword/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the keyword object.</p>
<pre>
$TMDB -> keywordDetail($keywordId, $loadAll = false);
</pre>
        </section>
        <section id="Discover">
          <h3>Discover</h3>
          <p>Those are the discover methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>movieDiscover</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/discover/movie</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the movie list matching the parameters.</p>
<pre>
$TMDB -> movieDiscover($page = false, $sortBy = false, $year = false, $primaryReleaseYear = false, $voteCountGte = false, $voteAverageGte = false, $withGenres = false, $releaseDateGte = false, $releaseDateLte = false, $certificationCountry = false, $certificationLte = false, $withCompanies = false);
</pre>
        </section>
        <section id="Search">
          <h3>Search</h3>
          <p>Those are the search methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchMovie</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/search/movie</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of movies matching the search.</p>
<pre>
$TMDB -> searchMovie($query, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchCollection</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/search/collection</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of collections matching the search.</p>
<pre>
$TMDB -> searchCollection($query, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchPerson</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/search/person</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of persons matching the search.</p>
<pre>
$TMDB -> searchPerson($query, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchList</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/search/list</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of list matching the search.</p>
<pre>
$TMDB -> searchList($query, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchCompany</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/search/company</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of companies matching the search.</p>
<pre>
$TMDB -> searchCompany($query, $page = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>searchKeyword</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/search/keyword</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of keywords matching the search.</p>
<pre>
$TMDB -> searchKeyword($query, $page = false);
</pre>
        </section>
        <section id="Reviews">
          <h3>Reviews</h3>
          <p>Those are the reviews methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>reviewInfo</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>Class Function</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Shell method to get review data from the TMDB API (Used by other methods no need to call it).</p>
<pre>
$TMDB -> reviewInfo($reviewId, $methodRaw = false, $parameters = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>reviewDetails</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/review/{id}</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the review object.</p>
<pre>
$TMDB -> reviewDetails($reviewId);
</pre>
        </section>
        <section id="Changes">
          <h3>Changes</h3>
          <p>Those are the changes methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAllMovieChanges</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/changes</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of changes for all movies.</p>
<pre>
$TMDB -> getAllMovieChanges($page = false, $startDate = false, $endDate = false);
</pre>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>getAllPersonChanges</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/movie/changes</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of changes for all persons.</p>
<pre>
$TMDB -> getAllPersonChanges($page = false, $startDate = false, $endDate = false);
</pre>
        </section>
        <section id="Jobs">
          <h3>Jobs</h3>
          <p>Those are the jobs methods.</p>
          <p class="text-warning"><i class="icon-hand-right"></i> <b>loadJobs</b></p>
          <p class="text-success"><i class="icon-globe"></i> <em>/3/job/list</em></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;Return the list of valid jobs in the TMDB.</p>
<pre>
$TMDB -> loadJobs();
</pre>
        </section>
        <section id="Examples">
          <h3>Examples</h3>
          <p class="text-success"><i class="icon-info-sign"></i> <em>Authenticate an existing account</em></p>
          <p>Use this only if you already have one valid account session id and whant to access any account related methods</p>
<pre>
//Set the account session id;
$TMDB -> setAuthenticationSessionId('VALID_ACCOUNT_SESSION_ID');

//Log in the user;
$accountObject = $TMDB -> logIn();
</pre>
          <p class="text-success"><i class="icon-info-sign"></i> <em>Get the account favorite movies</em></p>
          <p>If you already have one valid account session id</p>
<pre>
//Get the account favorit movies;
$TMDB -> getAccountFavoriteMovies();

//Get the result if any;
if( $TMDB -> status() ){
  if( $TMDB -> totalResults() > 0 ){
    $favoriteMovies = $TMDB -> results();
    foreach($favoriteMovies as $k => $v){
      //Do something with the movies;
    }
  }else{
    //No results;
  }
}else{
  //Error;
}
</pre>
          <p class="text-success"><i class="icon-info-sign"></i> <em>Get the now playing movies second page</em></p>
          <p>List just the second page movies</p>
<pre>
//Get the account favorit movies;
$TMDB -> getNowPlayingMovies(2);

//Get the result if any;
if( $TMDB -> status() ){
  if( $TMDB -> totalResults() > 0 ){
    $nowPlayingMovies = $TMDB -> results();
    foreach($nowPlayingMovies as $k => $v){
      //Do something with the movies;
    }
  }else{
    //No results;
  }
}else{
  //Error;
}
</pre>
          <p class="text-success"><i class="icon-info-sign"></i> <em>Search for movies</em></p>
          <p>Get all movies matching the query</p>
<pre>
//Get the account favorit movies;
$TMDB -> searchMovie('fight club', 1);

//Get the result if any;
if( $TMDB -> status() ){
  if( $TMDB -> totalResults() > 0 ){
    $searchResultMovies = $TMDB -> results();
    foreach($searchResultMovies as $k => $v){
      //Do something with the movies;
    }
  }else{
    //No results;
  }
}else{
  //Error;
}
</pre>
        </section>
      </div>
    </div>
  </div>
</div>
<script type='text/javascript' src='_htmlContent/jQuery/jquery-latest.min.js?<?php echo $TMDB -> getVersion(); ?>'></script>
<script type='text/javascript' src='_htmlContent/bootstrap/js/bootstrap.min.js?<?php echo $TMDB -> getVersion(); ?>'></script>
</body>
</html>