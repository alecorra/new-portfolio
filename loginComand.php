<?php

define('USERNAME', 'Alessandro');
define('PASSWORD', '$2y$10$N6tRhsSczpOIW2CjCt9nQuz0uOCROlhe6yGoKPz9oFD35lFe4Rjxe');

if (!empty($_POST['username']) && (!empty($_POST['password']))) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();

    if ($username === USERNAME &&
        password_verify($password, PASSWORD)) {
        $_SESSION['loginOk'] = true;
        header('location: adminPanel.php');
    } else {
        header('location: loginForm.php?login=error');
    }
} else {
    echo '<p>Oops! Something went wrong. Username and/or password is/are not correct</p>';
    echo '<a class="login" href="loginForm.php?login=error">TRY AGAIN</a>';
}