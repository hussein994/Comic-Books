<?php require_once 'assets/lang/language.php';
include "assets/PHP/databaseclass.php";?>


<!doctype html>
<html lang="en">
<head>
    <?php require_once 'assets/PHP/header.php';?>
    <link rel="stylesheet" href="assets/css/logPage.css">
</head>

<body>

    <div id="form">
        <form action="logPage_exetract.php" method="post">

    <!--        <img src="res/profile-img.png" alt="profile image">-->

            <ul id="form-messages"></ul>


            <label>
                <?=$text['user']?>
                <input type="text" id="Username" name="Username">
            </label>


            <label>
                <?=$text['pass']?>
                <input type="password" id="password" name="password">
            </label>

            <br>

                <button type="submit" id="bttn-log">Log in</button>
            <br>

            <a href="http://localhost:8000/skeleton.php<?=$lang?>"><?= $text['text2']?></a>
        </form>
    </div>

    <?php
    $variable = new databaseclass();
    $users = $variable->getUsers();

    foreach ($users as $user) :
        ?>
        <article>
            <p>| ID-><?= $user['id']?>
                |  User-><?= $user['Username'] ?>
                |  Pass-><?= $user['password'] ?>  |</p>
        </article>
    <?php
    endforeach;
    ?>






    <script> // AJAX messages
        const form = {
            Username: document.getElementById('Username'),
            password: document.getElementById('password'),
            log: document.getElementById('bttn-log'),
            messages: document.getElementById('form-messages'),
            formu: document.querySelector("form")   // id css
        };



        form.formu.addEventListener('submit',e=>{
            // console.log("hello");
            e.preventDefault(); // prevent form from refreshing with each attempt

            const request = new XMLHttpRequest();

            request.onload=()=>{
                // console.log(request.responseText);
                let responseObject =null;

                try {
                    responseObject = JSON.parse(request.responseText);
                }catch (e)
                {
                    console.log('could not parse JSON')
                }

                if (responseObject){
                    handleresponse(responseObject);
                }

            };
            const requestData=`Username=${form.Username.value}&password=${form.password.value}`;
            // console.log(requestData);

            request.open('post','assets/PHP/checkLogin.php');
            request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            request.send(requestData);
        })

        function handleresponse(responseObject){
            // console.log(responseObject);
            if (responseObject.ok)
            {
                // TODO: delete if
                // location.href = 'Post.php';
                form.formu.submit();

            }else{  // create messages
                while (form.messages.firstChild)
                {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message)=>
                {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });
                form.messages.style.display = "block";
            }
        }
    </script>




</body>