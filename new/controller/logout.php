<?php 
session_start(); 
 
if (isset($_SESSION['userType'])){
    unset($_SESSION['userType']); // xóa session login

    header("Location: http://localhost/New/Login.php");
}
?>
