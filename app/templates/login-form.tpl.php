<?php
/**
 * Template for login form.
 */
?>
<div class="col-xs-6 col-xs-offset-3">
  <form class="form-signin" action="controller.php?q=login-user" method="POST">
    <h2>Välkommen, logga in</h2>
    <p>Ännu inget konto? <a href="index.php?q=register">Registrera dig här!</a>
    <label for="loginEmail" class="sr-only">E-mail</label>
    <input type="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
    <label for="loginPassword" class="sr-only">Lösenord</label>
    <input type="password" name="password" class="form-control" placeholder="Lösenord" required>
    <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Logga in</button>
  </form>
</div>
