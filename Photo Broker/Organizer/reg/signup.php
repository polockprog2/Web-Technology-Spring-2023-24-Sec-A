<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer's Sign Up</title>
    <style>
        /* Inline CSS for simplicity */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #ffff;
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #ffff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .container {
            margin: 20px auto;
            max-width: 600px;
            padding: 0 20px;
        }

        .form-container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        .form-container h2 {
            margin-top: 0;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="tel"],
        .form-container input[type="password"],
        .form-container textarea,
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Organizer's Sign Up</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
    </header>

    <div class="container">
        <div class="form-container">
            <h2>Create an Account</h2>
            <form action="../model/addorg.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>



                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone">




                <input type="submit" value="Sign Up">
            </form>
            <p>Already have an account? <a href="../organizer.php">Login</a></p> <br><br>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Organizer's Portal. All rights reserved.</p>
    </footer>
</body>

</html>