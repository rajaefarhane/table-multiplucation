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
<div class="tbl">
    <table border="2" class="ligne1">
<?php
echo '<tr><td class="de"></td>';
//la première ligne
for ($i=0;$i<=10;$i=$i+1)
{
echo"<th>".$i."</th>";
}
echo"</tr>";

for ($j=0;$j<=10;$j++)
{
echo"<tr><th>".$j."</th>";
for($k=0;$k<=10;$k++)
{
$p=$j*$k;
echo"<td>".$p."</td>";
}
echo"</tr>\n";
}


?>
</div>

  </body>
</html>
