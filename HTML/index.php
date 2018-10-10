<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../JS/mesfonctions.js"></script>
</head>
<body>
    <?php
    include "../PHP/cnx.php";
    $sql = $bdd->prepare("select idCateg, nomCateg from categorie");
    $sql->execute();

    //echo "<form method='get' action ="../PHP/getAllJeux.php'>";
    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {
        echo "<input name='num' type='radio' value='".$ligne['idCateg']."'>".$ligne['nomCateg'];
    }
    //echo "<input type=submit value='Afficher les jeux'>";
    echo "<input type='button' onclick='AfficherLesJeux()' value='Afficher les jeux'>";
    //echo"</form>";

    echo "<div id='divJeux'></div>";

    ?>
</body>
</html>