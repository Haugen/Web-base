<?php

include('commons.php');

/**
 * Registers a user on the site.
 *
 * @param $user
 *   An array containing user information from the registration form.
 *     - email: The email to register.
 *     - password: The password.
 */
function register_user($user) {
  // Get a database connection.
  $dbcon = db_connect();

  var_dump($dbcon);
}
