<?php
session_start();

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
        if($_SESSION['username'] == $username && $_SESSION['password'] == $password) {
            $_SESSION['loggedin'] = true; // Mark the user as logged in
            header("Location: insidePage.html"); // Redirect to home page
            exit;
        } else {
            echo "<script>alert('Invalid username or password.');</script>";
        }
    } else {
        echo "<script>alert('You need to sign up first.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
        
    </form>
</body>
</html>