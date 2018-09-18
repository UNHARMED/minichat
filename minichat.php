<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'root');


$reponse = $bdd->query('SELECT * FROM messages');

$bdd->exec (
  "INSERT INTO messages(pseudo, message)
  VALUES('".$_POST['pseudo']."', '".$_POST['message']."')"
          );

header('Location: main.php');
?>
