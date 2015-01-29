<?php
/**
 * Fle for common functionality to be used throughout the application.
 */
session_start();

/**
 * Connect to the database.
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
 * Sanitize a string to prevent weird characters.
 */
function sanitize($string) {
  $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
  return $string;
}

/**
 * Checks weather a user is logged in or not.
 */
function is_logged_in() {
  if (isset($_SESSION['user']))
    return true;

  return false;
}
