<?php
// modificatio des valeur du cookie login
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    setcookie('login', $login, time() + (86400 * 30));
}
// modification des valeur du cookie password
if (!empty($_POST['password'])) {
    $password = $_POST['password'];
    setcookie('password', $password, time() + (86400 * 30));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5/8</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="login">Identifiant</label>
            <input type="text" name="login" id="login" placeholder="Identifiant" />
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Mot de passe"/>
            <input type="submit" name="submit" value="Valider">
        <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['login'])) {
                ?>
                <p>Login non défini</p>
            <?php } else { ?>
                <p>Votre login modifié : <?= $_POST['login']; ?></p>
            <?php } ?>
            <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['password'])) {
                ?>
                <p>Mot de passe non défini</p>
            <?php } else { ?>
                <p>Votre mot de passe modifié : <?= $_POST['password']; ?></p>
        <?php } ?>
        </form>
    </body>
</html>
