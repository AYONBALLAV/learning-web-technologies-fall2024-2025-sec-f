<?php
session_start();

if (isset($_POST['submit_registration'])) {
    $fullname = trim($_REQUEST['fullname']);
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    $confirm_password = trim($_REQUEST['confirm_password']);

    if (empty($fullname) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "filup all";
    } else if ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else if (isset($users[$username])) {
        echo "Username already exists.";
    } else {

        $users[$username] = ['password' => $password];
        echo "Registration successful! You can now <a href='login.html'>login</a>.";
    }
}

?>
