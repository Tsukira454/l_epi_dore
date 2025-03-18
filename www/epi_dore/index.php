<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzzzzzzza</title>
</head>
<body>
    <?php require(__DIR__ . "/php/menu.php"); ?>
<?php
    if(isset($_SESSION['email'])) {
        echo "<h1>Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom'].$_SESSION["userID"]."</h1>";
        echo '<a href="commande.php"><button>Nouvelle Commande</button></a>';
    }
    else {
        echo "<h1>Hello World !!</h1>";
    }
?>

</body>
</html>
