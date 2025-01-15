<?php
$cAcceuil = "";
$cContact = "";
switch ($_SERVER["REQUEST_URI"]) {
    case "/lvr/":

        $cAcceuil = "active";
        break;
    case "/lvr/contact.php":

        $cContact = "active";
        break;

}
ob_start();
?>
<li><a href=<?= "./" ?> class="<?= $cAcceuil ?>">Accueil</a></li>
<li><a href=<?=  "./contact.php" ?> class="<?= $cContact ?>">Contact</a></li>
<?php
$navi = ob_get_clean();

// version du prof
function creer_navItem($segmentUrl,$nomPage):string{
    $estPageActuelle = $_SERVER["REQUEST_URI"] ===$segmentUrl;
    $classCss = $estPageActuelle?'active':'';
    ob_start();
?>
<li><a href=<?=  $segmentUrl ?> class="<?= $classCss ?>"><?=$nomPage?></a></li>
<?php return ob_get_clean();
}
$navitems = creer_navItem('/','Acceuil') . creer_navItem('/contact.php','Contact');
