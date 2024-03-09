<?php

$path = dirname(__FILE__);
$pdo = new PDO('sqlite:'.$path.'/dblog.sqlite');

    $pdo->query
    ("CREATE TABLE IF NOT EXISTS User 
                (id INTEGER PRIMARY KEY AUTOINCREMENT,
                Username VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL)");

    $Username = htmlspecialchars($_POST['Username']); // to make sure all characters dont get interpreted
    $password = htmlspecialchars($_POST['password']);

if (strlen($Username) > 0 &&  strlen($Username) <= 255 &&
strlen($password) >= 8 &&  strlen($password) <= 255 )
{
    try
    {
        $statement = $pdo->prepare("
        INSERT INTO User ('Username', 'password')
        VALUES (:Username, :password)");

        $statement->bindValue(':Username', $Username);
        $statement->bindValue(':password', $password);
        $statement->execute();
    }catch (PDOException $exception)
    {}
}

header("Location: http://localhost:8000/Post.php"); // TODO: when transfering from account page to Post page language doesnt transfer