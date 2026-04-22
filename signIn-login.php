<!-- I watched this video to know how to make forms for sign in and login: https://www.youtube.com/watch?v=LiomRvK7AM8 -->

<?php

session_start();
require_once 'config.php';

// This here is for signing in!
if (isset($_POST['signIn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['signIn_error'] = 'This email has already been used.';
        $_SESSION['active_form'] = 'signIn';
    } else {
        $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
        $_SESSION['signIn_successMessage'] = "You have successfully created an account. Welcome $name!";
        $_SESSION['active_tab'] = '#signIn-login';
        $_SESSION['active_form'] = 'signIn';
        header("Location: main.php");
        exit();
    }
}


// This here is for logging in!
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['login_successMessage'] = "You have successfully logged in.";
            $_SESSION['active_tab'] = "#signIn-login";
            $_SESSION['active_form'] = "login";

            header("Location: main.php");
            exit();
        }
    }

    $_SESSION['login_error'] = 'This email or password does not exist. Please try again.';
    $_SESSION['active_form'] = 'login';
    $_SESSION['active_tab'] = '#signIn-login';
    header("Location: main.php");
    exit();
}

?>