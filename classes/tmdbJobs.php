<?php
class TMDBJobs{
  //Variables;
  var $department;
  var $jobList;

  //Constructor;
  function TMDBJobs($basicValues = false){
    if( is_array( $basicValues ) ){
      $this -> loadBasicValues($basicValues);
    }
  }

  function loadBasicValues($basicValues){
    $this -> department = $basicValues['department'];
    $this -> jobList    = $basicValues['job_list'];
  }

  //Methods;
  function getDepartment(){
    return $this -> department;
  }

  function setDepartment($v){
    $this -> department = $v;
  }

  function getJobList(){
    return $this -> jobList;
  }

  function setJobList($v){
    $this -> jobList = $v;
  }
}
?>