
<?php session_start() ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title>Evalphp</title>
  </head>
  <body>
    <div class="empty">
      <h2>Mon espace personnel</h2>
    </div>
    <div class="form">
      <form class="" action="home.php" method="post">
        <label for="lastname">Nom : </label>
        <input type="text" name="lastname" placeholder="lastname" required>

        <label for="firstname">Prenom :</label>
        <input type="text" name="firstname" placeholder="firstname" required>

        <input type="submit" value="Se Connecter">
    </div>
    </form>
    <div class="empty"></div>
  </body>
</html>
