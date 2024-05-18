<?php
include '../controller/checksession.php';
session_start(); // Start the session
require_once "../model/db_connorg.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve organizer email from session
    $organizer_email = $_SESSION['og'];

    // Prepare SQL statement
    $sql = "INSERT INTO events (name, description, location, start_date, end_date, created_by, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $description, $location, $start_date, $end_date, $created_by);

    // Set parameters
    $name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $created_by = $organizer_email; // Store session email in created_by

    // Execute statement
    if ($stmt->execute()) {
        // Event created successfully, redirect to view events page
        header("Location: ../event/viewevents.php");
        exit;
    } else {
        // Error occurred, handle it
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>