<?php
  include("connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form Learning</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <div class="container">
      <h1>Welcome to our world !</h1>
      <form class="login-form" name="form" action="login.php" method="POST">
        <h2>Login</h2>
        <label>Username<input type="text" name="user" /></label>
        <label>Password<input type="password" name="pass" /></label>
        <button type="submit" name="submit">Submit</button>
      </form>
      <form class="register-form inactive" name="regform" action="register.php" method="POST">
        <h2>Register</h2>
        <label>Username<input type="text" name="user" /></label>
        <label>Email<input type="email" name="em" /></label>
        <label>Password<input type="password" name="pass" /></label>
        <button type="submit" name="submit">Submit</button>
      </form>
      <p class="para">Don't have an account yet?</p><span>Register</span>
    </div>

    <script src="script.js"></script>
  </body>
</html>
