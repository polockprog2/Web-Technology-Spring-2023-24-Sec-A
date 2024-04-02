<?php
session_start();
include ('config.php');
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM client WHERE username='$username' && password='$password'";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    //print_r($data);
  
       if($row["type"]=="user")
       {
        header("location:users/users.html"); 
       }
       elseif($row["type"]==="photographer")
       {
        header("location:photographerPage/photographer.php");
       }
       elseif($row["type"]=="organizer")
       {
         header("Organizer/organizer.html");
       }
       elseif($row["type"]=="admin")
       {
         header("location:admin/admin.html");
       }
       else{
        echo "incorrect Username or Password";
       }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>
<link  rel="stylesheet" type="styles.css";>

<body>

    <form class="form" method="post">
      <p class="title">SIGN IN </p>
        <label>
        <input class="input" type="text" name="username" placeholder="USERNAME" required="">
        <input class="input" type="password" name="password" placeholder="PASSWORD" required="">
        </label>
        <button type="submit" name="login">Login</button>
    </form>
</body>
<style>
  body
  {
    font: 600 16px/18px "Open Sans", sans-serif;
    background:url("assets/img/conor-luddy-IVaKksEZmZA-unsplash.jpg");
    background-size:cover;
  }
  .form
  {
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 480px;
    background: #fff;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    text-align: center;
    padding:30px 30px 50px 80px;
    box-shadow:0xp 5px 20px 10px rgba(0,0,0,0.2);
  }

form input
{
  height: 50px;
  width: 90%;
  outline:none;
  margin: 10px;
  padding:3px 2px 3px 5px;
  background-color: rgba(255, 255, 255, 0.5);
   font-size:18px;
 border-bottom-width: 2px;
}
form input::placeholder
{
  color:rgb(31, 31, 34);
  font-size:17px;
}
form .field 
{
 width: 100%;
 margin-bottom: 20px;

}
form .label
{
  height: 50px;
  width: 100%;
  outline:none;
  padding:0 15px;
 padding-left: 40px;
 font-size:18px;
 border-radius: 5px;
 border-bottom-width: 2px;
}
button
{
  margin-top: 30px;
  border: none;
  background: #adf;
  cursor: pointer;
  transition: background 0.2s ease;
  width: 90%;
  padding:3%;

}
</style>
</html>

