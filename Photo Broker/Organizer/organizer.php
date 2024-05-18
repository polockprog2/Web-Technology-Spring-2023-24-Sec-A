<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Organizer Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    input[type="email"],
    input[type="password"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #333;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }

    p {
      text-align: center;
      margin-top: 15px;
    }

    p a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    p a:hover {
      color: #555;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Organizer Login</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error" style="color: red; font-size: 100%; font-weight: bold">
        <?php echo $_GET['error']; ?>
      </p>
    <?php } ?>
    <form action="../Organizer/model/validatelogin.php" method="post">
      <label for="useremail">Email:</label>
      <input type="email" id="useremail" name="useremail" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />

      <input type="submit" value="Login" />
    </form>
    <p>
      Don't have an account? <a href="../Organizer/reg/signup.php">Sign Up</a>
    </p>
  </div>
</body>
<footer>
  <p>&copy; 2024 Photographer's Portal. All rights reserved.</p>
</footer>

</html>