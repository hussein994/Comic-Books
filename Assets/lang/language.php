<?php
//var_dump($_GET);
$lang="";
if (isset($_GET['lang'])){
    if ($_GET['lang'] === 'fr') {
        include("fr.php");
        $lang="?lang=fr";
    } elseif ($_GET['lang'] === 'en') {
        include("en.php");
        $lang="?lang=en";
    } else {
        include("en.php");
        $lang="?lang=en";
    }}  else {
    include("en.php");
    $lang="?lang=en";
}
