<?php require_once 'assets/lang/language.php';
include "assets/PHP/databaseclass.php";?>


<!doctype html>
<html lang="en">
<head>
    <?php require_once 'assets/PHP/header.php';?>
    <link rel="stylesheet" href="assets/css/seeAll.css">
    <script type="text/javascript" src="assets/js/lang.js" defer></script>
</head>

<body>

    <header>
        <?php require_once 'assets/PHP/navbar.php';?>
    </header>

    <div class="container1">
        <?php

        $db = new databaseclass();
        $comic = $db->getUploads();

        foreach ($comic as $comics) :
            ?>
            <div class="Comic-container">
                <div class="poster">
                    <a href="description.php<?= $lang ?>&id=<?=$comics['image_id']?>"> <img src="<?=$comics['Image_URL']?>" alt="comic-poster"></a>
                </div>
                <div class="comic-details">
                    <h3><a href="description.php" title="Venom"><?=$comics['title']?></a></h3>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <a href="#" class="go-top"><?= $text['backtop']?> &#8593;</a>
</body>

<?php require_once 'assets/PHP/footer.php';
require_once 'assets/js/navbttn.js';?>



</html>
