<?php require_once 'assets/lang/language.php';
include 'assets/PHP/databaseclass.php';?>


<!doctype html>
<html lang="en">
<head>
    <?php require_once 'assets/PHP/header.php';?>
    <link rel="stylesheet" href="assets/css/Post.css">
    <script type="text/javascript" src="assets/js/lang.js" defer></script>
</head>


<body>
    <header>
        <?php require_once 'assets/PHP/navbar.php';?>
    </header>

    <h1><?=$text['text3']?></h1><br>

    <div id="upload-form">
        <form action="upload.php" method="post">    <!-- action when submitting the form head to file specified -->

            <label>
                <h2><?=$text['text4']?></h2>
                <input type="url" id="Image" name="Image" size="40">
            </label>

            <label>
                <h2><?=$text['text5']?></h2>
                <input type="text" id="Title" name="Title">
            </label>
            <br>
            <button type="submit" id="bttn-log">Send</button>
        </form>
    </div>

    <?php
    $db = new databaseclass();
    $uplds = $db->getUploads();

    foreach ($uplds as $upld) :
        ?>
        <article>
            <p><?= $upld['image_id'] ?> ---
                <?= $upld['Image_URL'] ?> ---
                <?= $upld['title'] ?></p>
        </article>
    <?php
    endforeach;
    ?>

</body>

<?= require_once 'assets/PHP/footer.php';
require_once 'assets/js/navbttn.js';?>







</html>
