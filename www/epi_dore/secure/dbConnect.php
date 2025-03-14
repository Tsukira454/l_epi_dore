<?php

require("identifiant.php");

try {
    $dbPizza = new PDO("mysql:host=".$DBHOST.";dbname=".$DBNAME, $DBUSER, $DBPASSWORD);
    $dbPizza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "ZUT !!! Encore une erreur ligne ".$e->getLine()." dans le fichier ".$e->getFile().":
        ".$e->getMessage();
}
