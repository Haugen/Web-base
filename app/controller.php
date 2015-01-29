<?php
/**
 * File for receiving and handeling form requests etc.
 */
include('commons.php');

$q = $_GET['q'];

/**
 * Check and prepare the input from user registration form. If everything is
 * OK, create the user. If not redirect to the front page with errors.
 */
if ($q == 'register-user') {
  $error = array();

  // Sanitize the input.
  $email = sanitize($_POST["email"]);
  $pw = sanitize($_POST["password"]);
  $pw_again = sanitize($_POST["passwordAgain"]);

  // Check the e-mail address prpperly.
  $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
  if ($email == false) {
    $error[] = 'Du har angivit en ogiltlig e-mail.';
  }

  // Check if password is matching.
  if ($pw != $pw_again) {
    $error[] = 'Lösenorden stämmer inte överens med varandra.';
  }

  // If there is an error, put the message in a session.
  if (!empty($error)) {
    $_SESSION['info']['error'] = $error;
    header("Location: index.php");
  }
  // If there is no errors, create the user and redirect to the frontpage.
  else {
    $user = array(
      'email' => $email,
      'password' => hash('md5', $pw)
    );

    register_user($user);
    $_SESSION['info']['message'] = array('Din registrering är genomförd. Välkommen in!');
  }
}
