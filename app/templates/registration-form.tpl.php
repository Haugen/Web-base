<?php
/**
 * Template for registreing a user.
 */
?>
<div class="col-xs-6 col-xs-offset-3">
  <form class="form-register" action="controller.php?q=register-user" method="POST">
    <h2>Registrera ett konto</h2>
    <p>Har du redan ett konto? <a href="index.php">Logga in här!</a>
    <label for="regEmail" class="sr-only">E-mail</label>
    <input type="email" name="email" class="form-control" placeholder="E-mail" autofocus>
    <label for="regPassword" class="sr-only">Lösenord</label>
    <input type="password" name="password" class="form-control" placeholder="Lösenord" required>
    <label for="regPasswordAgain" class="sr-only">Lösenord igen</label>
    <input type="password" name="passwordAgain" class="form-control" placeholder="Lösenord igen" required>
    <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrera nytt konto</button>
  </form>
</div>
