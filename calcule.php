<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>table de multiplucation</title>
  </head>
  <body>
    <div class="scrollmenu">
      <img src="img/log.png" alt="logo" class="logo"/>
      <a href="index.php">Accueil</a>
      <a href="listetable.php">liste des tables </a>
      <a href="#contact">Quize</a>
      <a href="contact.php">Contact</a>
    </div>
        	<input type="submit" value="Révision" class="bouton" />
    <div class="tabmultiplucation">
<?php
		$a=$_POST['val'];
		echo '<p class="texte"> Table de multiplication de '.$a.' </p></br></br>';
		echo "<table border=1  ><tr >";
    for ($i=1;$i<=10;$i++)
      echo '<tbody class="ligne"><tr><td>'.$i.' x '.$a.' = '.$a*$i.'<tbody><tr><td>';
    ?>
    </div>
  </body>
</html>
