<?php
if(isset($_POST['mail'])) {
    session_start();
    $email = htmlspecialchars($_POST['mail']);
    $password = hash('sha256', htmlspecialchars($_POST['mdp']));

    require_once(__DIR__ . "/dbConnect.php");
    $request = $dbEpi_dore->prepare("SELECT * FROM clients
                       WHERE email = :email AND mdp = :mdp");
    $request->execute(array(
        ":email" => $email,
        ":mdp" => $password
    ));
    $results = $request->fetchAll();
    echo $results;
    echo count($results);
    if(count($results) == 1) {
        //Ok pour la connexion
        $_SESSION["userID"] = $results[0]['id'];
        $_SESSION["email"] = $email;
        $_SESSION['nom'] = $results[0]['nom'];
        $_SESSION['prenom'] = $results[0]['prenom'];
        header('Location: index.php');
        die();
    }
    echo "Mauvaise combinnaison de login et mot de passe";

}

?>

<form method="post" action="">
    Mail : <input type="email" name="mail" value="<?php echo $_POST['mail'] ?? "";?>"><br>
    Mot de passe: <input type="password" name="mdp" value="<?php echo $_POST['mdp'] ?? "";?>"><br>
    <button type="submit">Connexion</button>
</form>