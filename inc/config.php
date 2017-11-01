<?php

  //If there is no constant defined called __CONFIG__, do not load this Files
  // eg. if user came directly here.
  if(!defined('__CONFIG__')){
    // Should really show 404 error page or something
    exit('You do not have a config file');
  }

  // Our config is below

  // Inlide the DB.php File
  include_once "classes/DB.php";

  $con = DB::getConnection();

?>
