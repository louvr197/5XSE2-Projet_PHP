<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
    $nomValide = "Nom " . ((
        isset($_POST['nom'])
        && !empty($_POST['nom'])
        && mb_strlen($_POST['nom'])>=2
        && mb_strlen($_POST['nom'])<=255
    )? "V":"Inv") ."alide";
}


$pageTitre  = "Contact";
$metaDescription  = "Vous êtes sur la page de contact";
require_once __DIR__ . DIRECTORY_SEPARATOR . 'header.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . "navPrincipale.php";
?>
<h1>Contact</h1>
<form method="post">
    <p>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required minlength="2" maxlength="255">
        <?= $nomValide?? null?>
    </p>
    <p>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" minlength="2" maxlength="255">
    </p>
    <p>
        <label for="mail">Email :</label>
        <input type="email" name="mail" id="mail" required>
    </p>
    <p>
        <label for="message">Message :</label>
    </p>
    <p>
        <textArea id="message" name="message"></textArea>
    </p>

    <input type="submit" value="valider">
</form>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>