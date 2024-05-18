<?php
// Include the necessary files and start the session
include '../controller/checksession.php';
require_once "../model/db_connorg.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Note: It's recommended to hash the password before storing it in the database
    $phone = $_POST['phone'];

    // Retrieve the organizer's email from the session
    $organizer_email = $_SESSION['og'];

    // Update organizer data in the database
    $sql = "UPDATE organizers SET 
            name = '$name',
            email = '$email',
            password = '$password',  -- Note: Make sure to hash the password before storing it in the database
            phone_number = '$phone'
            WHERE email = '$organizer_email'";

    $edited = mysqli_query($conn, $sql);
    if ($edited) {
        // Redirect to the organizer dashboard upon successful update
        header("Location:../view/ogdashboard.php");
        exit; // Exit after redirection
    } else {
        // If there's an error, display it
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // If the form is not submitted via POST method, redirect back to the edit profile page
    header("Location:../view/editprofile.php");
    exit; // Exit after redirection
}
?>