<?php

include_once('commons.php');

/**
 * Registers a user on the site.
 *
 * @param $user
 *   An array containing user information from the registration form.
 *     - email: The email to register.
 *     - password: The password.
 */
function register_user($user) {
  $dbcon = db_connect();
  $email = $user['email'];
  $pw = $user['password'];

  $sql = "INSERT INTO user (email, password)
    VALUES ('$email', '$pw')";

  mysqli_query($dbcon, $sql);
  mysqli_close($dbcon);
}
