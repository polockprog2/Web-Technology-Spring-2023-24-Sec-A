<?php
include '../controller/checksession.php';
// Include database connection file
require_once "../model/db_connorg.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form inputs
    $event_id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Update event details in the database
    $sql = "UPDATE events SET name='$name', description='$description', location='$location', start_date='$start_date', end_date='$end_date' WHERE event_id =$event_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to view events page after successful update
        header("Location: ../event/viewevents.php");
        exit();
    } else {
        echo "Error updating event: " . $conn->error;
    }
} else {
    // If form is not submitted, redirect to the view events page
    header("Location: view_events.php");
    exit();
}

// Close database connection
$conn->close();
?>