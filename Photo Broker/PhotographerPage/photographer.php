<?php
session_start();
include("connection.php"); 

if(!isset( $_SESSION['username']))
{
  header("Location:Login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/styles.css">
</head>
<body>
  <header class="header" id="header">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
      <div id="mydownSidenav" class="downSidenav">
        <a href="#">setting</a>
        <a href="#">Logout</a>
      </div>
    </div>
    
    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">Profile</span>
    
    </nav>
  </header>
  <section>
        <div class="Profilegrid">
        <img src="assets/img/dress.jpg" alt="picture" id="profilePic"/>
        </div>
        </div>
   </section>     
    <section>
        <div class="Gallary">
        <h4>Gallery</h4>
        <div class="product-grid">
        <div class="product-item">
        <a href="portfolio.html"><img src="assets/img/tatiana.jpg" alt="Wooden Photo Block"></a>
        <h3>Tatiana</h3>
        <p>Available to take photo for £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        <div class="product-item">
        <img src="assets/img/dani.jpg" alt="Wooden Photo Block">
        <h3>Dani</h3>
        <p>From £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        <div class="product-item">
        <a href="portfolio.html"><img src="assets/img/kyle.jpg" alt="Wooden Photo Block"></a>
        <h3>Kylee</h3>
        <p>From £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        <div class="product-item">
        <img src="assets/img/letizia.jpg" alt="Wooden Photo Block">
        <h3>Letizia</h3>
        <p>From £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        <div class="product-item">
        <img src="assets/img/shwa.jpg" alt="Wooden Photo Block">
        <h3>Shaw</h3>
        <p>From £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        <div class="product-item">
        <img src="assets/img/tetania.jpg" alt="Wooden Photo Block">
        <h3>Trichy</h3>
        <p>From £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        <div class="product-item">
        <img src="assets/img/blak.jpg" alt="Wooden Photo Block">
        <h3>Blakk</h3>
        <p>From £17.99</p>
        <p class="offer">From £9.00 with code FLASH50</p>
        </div>
        </div>
        </div>
  </section>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
  
</body>
</html> 
