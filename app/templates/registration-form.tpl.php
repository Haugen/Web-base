<?php
/**
 * Template for registreing a user.
 */
?>
<div class="col-xs-6 col-xs-offset-3">
  <form class="form-register">
    <h2>Registrera ett konto</h2>
    <label for="regEmail" class="sr-only">E-mail</label>
    <input type="email" id="regEmail" class="form-control" placeholder="E-mail" required autofocus>
    <label for="regPassword" class="sr-only">Lösenord</label>
    <input type="password" id="regPassword" class="form-control" placeholder="Lösenord" required>
    <label for="regPasswordAgain" class="sr-only">Lösenord igen</label>
    <input type="password" id="regPasswordAgain" class="form-control" placeholder="Lösenord igen" required>
    <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrera nytt konto</button>
  </form>
</div>
