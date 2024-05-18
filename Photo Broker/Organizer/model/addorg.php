<?php
require_once "../model/db_connorg.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];



    $check_sql = "SELECT * FROM organizers WHERE email = '$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {

        header("Location:../reg/signup.php?error=Email already exists");
        exit;
    }

    $insert_sql = "INSERT INTO organizers (name, email, password, phone_number ) 
                   VALUES ('$name', '$email', '$password', '$phone')";
    if (mysqli_query($conn, $insert_sql)) {

        header("Location:../organizer.php");
        exit;
    } else {

        header("Location:../reg/signup.php?error=Error adding organizers");
        exit;
    }
} else {

    header("Location:../reg/signup.php");
    exit;
}
?>