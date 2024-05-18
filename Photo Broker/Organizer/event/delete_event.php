<?php
include '../controller/checksession.php';
// Include database connection file
require_once "../model/db_connorg.php";

// Check if event ID is set and is a valid integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Get event ID from the URL parameter
    $event_id = $_GET['id'];

    // SQL to delete event from database
    $sql = "DELETE FROM events WHERE event_id = $event_id";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        // Redirect to another page after successful deletion
        header("Location: ../event/viewevents.php");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Error deleting event: " . $conn->error;
    }
} else {
    // If event ID is not set or is not a valid integer, show an error message
    echo "Invalid event ID";
}

// Close database connection
$conn->close();
?>