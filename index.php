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

<div class="titre">
<h1>Tables de multiplication </h1>
</div>
<h2>Sur tablesdemultiplication.fr, tu peux apprendre les tables très facilement. Les opérations sont simples et claires, tu peux donc tout de suite commencer à t’exercer sur les tables de multiplication. Choisis une des tables auxquelles tu veux t’entraîner, montre ce que tu sais faire dans le test .</h2>

<form action="calcule.php" method = "post" class="formulaire" >
<?php
for ($i=0;$i<=10;$i++)
{
?>
<INPUT TYPE="checkbox" NAME="val" VALUE=<?php echo "$i" ?> />
<?php
echo "$i";
}
?>
</br></br>
<input type="submit" value="Calculer" />
</form>

</body>
</html
