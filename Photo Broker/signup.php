<?php
session_start();
include 'config.php';
if (isset($_POST['submit'])) {
   $sql = "insert into client (firstname,lastname,email,username,password,type) values ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."','".$_POST['type']."')";
 
   $result = mysqli_query($conn,$sql);

 if($result){
     echo "<script>alert('Sign up Successfully!')</script>";
     header("Location:Login.php");
 }else{
     die("Error: ".mysqli_error($conn));
 }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<form class="form">
    <p class="title">Create your account </p>
    <p class="message">Signup now and get full access to our app. </p>
    <label>    
    <div class="flex">
        
            <input class="input" type="text" name="firstname" placeholder="Firstname" required="">
            <input class="input" type="text" name="lastname" placeholder="Lastname" required="">
            </div> 
        </label>
              
    <label>
        <input class="input" type="email" name="email" placeholder="Email" required="">
        <input class="input" type="text" name="username" placeholder="username" required="">
        <input class="input" type="password" name="password" placeholder="Password" required="">   
    </label> 
    </label>
    <select class=usertype id="type" name="type">
        <option value="photographer">Photographer</option>
        <option value="user">User</option>
        <option value="organizer">Organizer</option>
        </select>


<label>
    <button class="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="Login.php">Sign in</a> </p>
</label>
</form>

</body>
</html>
