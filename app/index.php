<?php
// Include header template.
include('templates/header.tpl.php');

if (!is_logged_in()) {
  // Include login form
  if (isset($_GET['q']) && $_GET['q'] == 'register') {
    include('templates/registration-form.tpl.php');
  }
  else {
    include('templates/login-form.tpl.php');
  }
}

// Include footer template.
include('templates/footer.tpl.php');

?>
