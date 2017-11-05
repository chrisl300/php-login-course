<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php";

  // anyone can run this as php and see the contents so we want it to
  // not run id called from any method except POST
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Always return JSON format
    header('Content-Type: application/json');

		// It is always looking for array, so ensure it exists
		$return = [];

		// Make Sure the user does not exists.

		// Make sure the user CAN be added AND IS added.

		// Return the proper information back to tJavascript to redirect us.
		$return['redirect'] = '/dashboard.php;

    echo json_encode($return, JSON_PRETTY_PRINT); exit;


  } else {
    //Die, kill the script, redirect the user, do something regardless
    exit(test);
  }






?>
