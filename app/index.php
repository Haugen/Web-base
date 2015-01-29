<?php
// Include header template.
include('templates/header.tpl.php');

// Include login form
if (is_logged_in()) {
  include('templates/login-form.tpl.php');
}
else {
  include('templates/registration-form.tpl.php');
}

// Include footer template.
include('templates/footer.tpl.php');

?>
