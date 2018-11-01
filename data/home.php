<?php
session_start()
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title></title>
  </head>
  <body>
    <header>
      <?php

        if ( (!empty($_POST['firstname']) || !empty($_POST['lastname'])) || (!empty($_POST['firstname']) && !empty($_POST['lastname'])) ) {

          $_SESSION['firstname'] = $_POST['firstname'];
          $_SESSION['lastname'] = $_POST['lastname'];

          echo "Bienvenue " . $_SESSION['firstname'] . " " . $_SESSION['lastname'];
        } else {
          echo "<a href= ./admin.php> Vous devez vous identifier </a>";
        }

       ?>
    </header>
    <main>
      <form class="" action="index.php" method="POST">

        <label for="bloc1">Gérer le bloc 1 :</label>
        <select name="bloc1">
          <option>Masquer</option>
          <option>Afficher</option>
        </select>

        <label for="bloc2">Gérer le bloc 2 :</label>
        <select name="bloc2">
          <option>Masquer</option>
          <option>Afficher</option>
        </select>

        <label for="bloc3">Gérer le bloc 3 :</label>
        <select name="bloc3">
          <option>Masquer</option>
          <option>Afficher</option>
        </select>

        <input type="submit" name="save" value="Save">

      </form>
    </main>
    <footer>
    </footer>
  </body>
</html>
