<?php
include "cnx.php";

$sql = $bdd->prepare("select idJeux, nomJeux, from jeux where numCateg= ");
$sql->execute();

foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "<p>".$ligne['nomJeux']."</p>";
}