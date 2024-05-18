<?php
require_once "../model/db_connorg.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `organizers` WHERE `email`='$useremail' AND `password`='$password'";
    $searchresult = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($searchresult);

    if ($count > 0) {
        // Set session variable for successful login
        $_SESSION['og'] = $useremail;
        header("Location:../view/ogdashboard.php");
    } else {
        // Redirect back to login page with error message
        header("Location:../organizer.php?error=Invalid Username/Password");
    }
} else {
    // Redirect back to login page if not a POST request
    header("Location:../orgranizer.php?error=Unauthorized Access");
}
?>