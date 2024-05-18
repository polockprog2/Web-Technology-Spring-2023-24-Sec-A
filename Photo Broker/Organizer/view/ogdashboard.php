<?php
include '../controller/checksession.php';
require_once "../model/db_connorg.php";

$organizer_email = $_SESSION['og'];

// Corrected SQL query (removed single quotes around table name)
$sql = "SELECT * FROM organizers WHERE email = '$organizer_email'";

$result = mysqli_query($conn, $sql);
$organizer = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer's Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }



        .nav-links ul {
            list-style-type: none;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .nav-links ul li {
            display: inline;
            margin-right: 10px;
        }

        .nav-links ul li a {
            display: inline-block;
            margin: 0 10px;
            padding: 12px 24px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links ul li a:hover {
            background-color: #555;
        }
    </style>
</head>


<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($organizer['name']); ?>!</h1>
        <p>Dashboard for Organizer</p>
    </header>

    <nav class="nav-links">
        <ul>
            <li><a href="../view/editprofile.php">Edit Profile</a></li>
            <li><a href="../event/addevents.php">Add Events</a></li>
            <li><a href="../event/viewevents.php">View Events</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            <h2>Organizer Profile</h2>
            <table>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <?php foreach ($organizer as $key => $value): ?>
                    <tr>
                        <td><?php echo ucfirst(str_replace('_', ' ', $key)); ?></td>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </main>
</body>

</html>


</html>