<?php
// Include header template.
include('templates/header.tpl.php');

// Include login form
if ($_GET['q'] == 'register') {
  include('templates/registration-form.tpl.php');
}
else {
  include('templates/login-form.tpl.php');
}

// Include footer template.
include('templates/footer.tpl.php');

?>
