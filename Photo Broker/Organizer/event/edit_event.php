<?php
include '../controller/checksession.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="datetime-local"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Event</h1>
        <?php

        // Include database connection file
        require_once "../model/db_connorg.php";

        // Check if event ID is set and is a valid integer
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            // Get event ID from the URL parameter
            $event_id = $_GET['id'];

            // Fetch event details based on the ID
            $sql = "SELECT * FROM events WHERE event_id = $event_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Fetch event details
                $row = $result->fetch_assoc();
                $name = $row['name'];
                $description = $row['description'];
                $location = $row['location'];
                $start_date = $row['start_date'];
                $end_date = $row['end_date'];

                // Display edit form with pre-filled data
                ?>
                <form action="../event/update_event.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $event_id; ?>">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>

                    <label for="description">Description:</label><br>
                    <textarea id="description" name="description" required><?php echo $description; ?></textarea><br>

                    <label for="location">Location:</label><br>
                    <input type="text" id="location" name="location" value="<?php echo $location; ?>" required><br>

                    <label for="start_date">Start Date:</label><br>
                    <input type="datetime-local" id="start_date" name="start_date" value="<?php echo $start_date; ?>"
                        required><br>

                    <label for="end_date">End Date:</label><br>
                    <input type="datetime-local" id="end_date" name="end_date" value="<?php echo $end_date; ?>" required><br>

                    <input type="submit" value="Update">
                </form>
                <?php
            } else {
                echo "<p>Event not found</p>";
            }
        } else {
            // If event ID is not set or is not a valid integer, show an error message
            echo "<p>Invalid event ID</p>";
        }

        // Close database connection
        $conn->close();
        ?>
    </div>
</body>

</html>