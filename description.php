<?php require_once 'assets/lang/language.php';
include "assets/PHP/databaseclass.php";?>

<!doctype html>
<html lang="fr">
<head>
    <?php require_once 'assets/PHP/header.php';?>
    <link rel="stylesheet" href="assets/css/description.css">
    <script type="text/javascript" src="assets/js/lang.js" defer></script>

</head>


<?php
    $id = $_GET['id'];
    $db = new databaseclass();
    $comic = $db->getIDUploads($id);
?>


<body>

    <header>
        <?php require_once 'assets/PHP/navbar.php';?>
    </header>

    <div id="Comic-container">
        <img src="<?= $comic['Image_URL']?>" alt="comic-poster" id="cover">

        <div id="Description">  <!-- TODO: create data base and store the comic details and posters, then use the id of each to post -->
            <h1 id="Title-comic"><?=$comic['title']?></h1>
            <br>
            <div id="summary">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
                It has survived not only five centuries, but also the leap into electronic typesetting,<br>
                remaining essentially unchanged.<br> It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages,<br> and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem
                Ipsum.</p>
            </div>
        </div>
    </div>

</body>


<?php require_once 'assets/PHP/footer.php';
require_once 'assets/js/navbttn.js';?>




</html>




