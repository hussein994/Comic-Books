<?php
$path = dirname(__FILE__);
$pdo = new PDO('sqlite:'.$path.'/uploads.sqlite');


$pdo->query("CREATE TABLE IF NOT EXISTS Uploads
(image_id INTEGER PRIMARY KEY AUTOINCREMENT ,
Image_URL VARCHAR(255) NOT NULL UNIQUE ,
title VARCHAR(255) NOT NULL UNIQUE )");

$image = htmlspecialchars($_POST['Image']);
$title = htmlspecialchars($_POST['Title']);

//var_dump($title,$image);die;

if ($image > 0 && $title  > 0 && $title <= 255) {
    try {
        $statement = $pdo->prepare("INSERT INTO Uploads ('Image_URL','title')   
                                           VALUES (:Image_URL, :title)");
//by doing the prepare statement we escaped any sort of SQL injections.
        $statement->bindValue(':Image_URL', $image);
        $statement->bindValue(':title', $title);
        $statement->execute();
        header('Location: http://localhost:8000/skeleton.php');
//        var_dump($title,$image);die();
    } catch (PDOException $exception) {}
}


header('Location: http://localhost:8000/Post.php');


