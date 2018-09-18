
<form action="minichat.php" method="post">
<p>
  Pseudo<br/><input type="text" name="pseudo" /><br/><br/>
  Message<br/><input type="text" name="message" /><br/>
    <input type="submit" value="Valider" />
</p>
</form>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'root');


$reponse = $bdd->query('SELECT * FROM messages');
while ($donnees = $reponse->fetch())
{
?>
<p>
  <?php echo $donnees['pseudo'];?>: <?php echo $donnees['message'];?>
</p>
<?php
}
?>
