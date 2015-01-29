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

/**
 * Logs in a user on the site. This checks weather the information from the
 * form is a proper user, and starts a session if it is. Otherwise, set errors.
 *
 * @param $user
 *   An array containing user information from the login form.
 *     - email: The email.
 *     - password: The password.
 */
function login_user($user) {
  $dbcon = db_connect();
  $email = $user['email'];
  $pw = $user['password'];

  $sql = "SELECT id FROM user WHERE email = '$email' AND password = '$pw'";

  $result = mysqli_query($dbcon, $sql);
  if ($result->num_rows > 0) {
    $_SESSION['user'] = $email;
    return true;
  }

  return false;
}
