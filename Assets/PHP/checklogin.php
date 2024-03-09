<?php

$username = $_POST['Username'] ?? '';
$password = $_POST['password'] ?? '';

$ok = true;
$messages = array();

if (empty($username)) {  // if username was provided
    $ok = false;
    $messages[] = 'Username cannot be empty!';
}

if ( !isset($password) || empty($password) ) {
    $ok = false;
    $messages[] = 'Password cannot be empty!';
}

if ($ok) {
    if ($username === 'hussein' && $password === '8gf2usdw') {
        $ok = true;
        $messages[] = 'Successful login!';
    } elseif ($username === 'elleithy' && $password === '8gf2usdw') {
        $ok = true;
        $messages[] = 'Successful login!';
    } else {
        $ok = false;
        $messages[] = 'Incorrect username/password combination!';
    }
}

echo json_encode(
    array(
        'ok' => $ok,
        'messages' => $messages
    )
);

?>
