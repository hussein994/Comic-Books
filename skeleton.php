<?php require_once 'assets/lang/language.php';
include "assets/PHP/databaseclass.php";?>


<!doctype html>
<html lang="en">
<head>
    <?php require_once 'assets/PHP/header.php';?>
    <link rel="stylesheet" href="assets/css/skeleton.css">
    <script type="text/javascript" src="assets/js/lang.js" defer></script>
</head>


<body>

<!-- navigation bar + logo -->
    <header>
        <?php require_once 'assets/PHP/navbar.php';?>
    </header>




<!--  Content layout  -->
    <div id="seeAll"><a href="http://localhost:8000/seeAll.php<?=$lang?>"><?=$text['text6']?></a></div>


    <div class="box1 container1">

        <?php
        $db = new databaseclass();
        $comic = $db->getSomeUploads();

        foreach ($comic as $comics) :
            ?>
        <div class="Label New"><h1><?= $text['new']?></h1></div>
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



    <div class="box2 container1">
        <div class="Label Recommended"><h1><?= $text['recom'] ?></h1></div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=1"><img src="https://i.annihil.us/u/prod/marvel/i/mg/6/20/5a14646b54af4/detail.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=1" title="Venom">Venom (2018) #1</a></h3>
            </div>
        </div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=2"><img src="https://i.annihil.us/u/prod/marvel/i/mg/e/03/6352e578950f0/clean.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=2" title="Doctor-Strange">Venom (2020) #8</a></h3>
            </div>
        </div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=3"><img src="https://i.annihil.us/u/prod/marvel/i/mg/3/e0/5977a0861fa73/clean.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=3" title="Spider">BlackPanther(2001)#3</a></h3>
            </div>
        </div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=4"><img src="https://i.annihil.us/u/prod/marvel/i/mg/2/e0/5a1464d815a05/detail.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=4" title="Spider-man">Venom (2019) #41</a></h3>
            </div>
        </div>
    </div>



    <div class="box3 container1">
        <div class="Label Popular"><h1><?= $text['pop'] ?></h1></div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=5"><img src="https://i.annihil.us/u/prod/marvel/i/mg/6/70/6352e5e7e51d1/clean.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=5" title="Thanos">Spider-Man (2022) #11</a></h3>
            </div>
        </div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=6"><img src="https://i.annihil.us/u/prod/marvel/i/mg/9/80/6352e59cbb46c/clean.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=6" title="Bat-man">Dr.Strange (2022) #12</a></h3>
            </div>
        </div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=7"><img src="https://i.annihil.us/u/prod/marvel/i/mg/9/03/622780539e25b/clean.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=7" title="Bat-man">Spider-Man (2020) #12</a></h3>
            </div>
        </div>
        <div class="Comic-container">
            <a href="description.php<?= $lang ?>&id=9"><img src="https://i.annihil.us/u/prod/marvel/i/mg/5/03/582382b737a22/clean.jpg" alt="comic-poster"></a>
            <div class="comic-details">
                <h3><a href="description.php<?= $lang ?>&id=9" title="Avengers">Thanos (2014) #7</a></h3>
            </div>
        </div>
        
    </div>


    <a href="#" class="go-top"><?= $text['backtop']?> &#8593;</a>
</body>


<?php require_once 'assets/PHP/footer.php';
        require_once 'assets/js/navbttn.js';?>



</html>


