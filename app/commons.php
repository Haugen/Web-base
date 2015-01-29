<?php
/**
 * Fle for common functionality to be used throughout the application.
 */
session_start();

/**
 * Connect to the database.
 *
 * @return stdClass $dbcon
 *   If connected sucessfully, return the database connection.
 */
function db_connect() {
  // Database credentials.
  $server = 'localhost';
  $username = 'root';
  $password = 'root';
  $database = 'twitterino';

  // Create connection.
  $dbcon = mysqli_connect($server, $username, $password, $database);

  // Check connection.
  if (!$dbcon) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  return $dbcon;
}

/**
* Checks weather a user is logged in or not.
*
* @return bool TRUE|FALSE
*   Return true if a user has a session running. Otherwise return false.
*/
function is_logged_in() {
  if (isset($_SESSION['user']))
    return true;

  return false;
}
