<?php
include '../controller/checksession.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .event-container {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .event-container h2 {
            margin-top: 0;
            color: #333;
        }

        .event-detail {
            margin-bottom: 10px;
            color: #666;
        }

        .action-buttons {
            display: flex;
            justify-content: flex-end;
        }

        .action-buttons a {
            color: #fff;
            background-color: #007bff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            margin-left: 5px;
        }

        .action-buttons a:hover {
            background-color: #0056b3;
        }

        .no-events {
            text-align: center;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Events</h1>
        <a href="addevents.php" style="color: #fff;
            background-color: #007bff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            margin-left: 5px;">Add Events</a>
        <a href="../view/ogdashboard.php" style="color: #fff;
            background-color: #007bff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            margin-left: 5px;">Dashboard</a>

        <?php
        // Include database connection file
        require_once "../model/db_connorg.php";

        // Retrieve events from the database
        $sql = "SELECT * FROM events";
        $result = $conn->query($sql);

        // Check if there are any events
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Display event details using HTML markup
                echo "<div class='event-container'>";
                echo "<h2>" . $row["name"] . "</h2>";
                echo "<p class='event-detail'><strong>Description:</strong> " . $row["description"] . "</p>";
                echo "<p class='event-detail'><strong>Location:</strong> " . $row["location"] . "</p>";
                echo "<p class='event-detail'><strong>Start Date:</strong> " . $row["start_date"] . "</p>";
                echo "<p class='event-detail'><strong>End Date:</strong> " . $row["end_date"] . "</p>";
                echo "<p class='event-detail'><strong>Created By:</strong> " . $row["created_by"] . "</p>";
                echo "<p class='event-detail'><strong>Created At:</strong> " . $row["created_at"] . "</p>";

                // Action buttons
                echo "<div class='action-buttons'>";
                echo "<a href='delete_event.php?id=" . $row["event_id"] . "'>Delete</a>";
                echo "<a href='edit_event.php?id=" . $row["event_id"] . "'>Edit</a>";
                echo "</div>";

                echo "</div>";
            }
        } else {
            // No events found
            echo "<p class='no-events'>No events found</p>";
        }

        // Close connection
        $conn->close();
        ?>

    </div>
</body>

</html>