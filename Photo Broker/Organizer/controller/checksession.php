<?php session_start();
if (!isset($_SESSION['og'])) {
    header("Location:../organizer.php");
}


?>