<?php require_once 'assets/lang/language.php';?>


<!doctype html>
<html lang="fr">
<head>
    <?php require_once 'assets/PHP/header.php';?>
    <link rel="stylesheet" href="assets/css/contact.css">
    <script type="text/javascript" src="assets/js/lang.js" defer></script>
</head>


<body>
    <?php require_once 'assets/PHP/navbar.php';?>
    <h2><?= $text['text1']?></h2>

    <div id="socials">
        <a href="#"><img src="assets/res/facebook.png" id="facbk" alt="facebook icon"></a>
        <a href="#"><img src="assets/res/twitter.png" id="twttr" alt="twitter icon"></a>
        <a href="#"><img src="assets/res/instagram.png" id="IG" alt="instagram icon"></a>
    </div>

</body>

<?php require_once 'assets/PHP/footer.php';
require_once 'assets/js/navbttn.js';?>





</html>