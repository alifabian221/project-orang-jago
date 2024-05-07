<?php 
include ("../koneksi/koneksi.php");

session_start();
    if(!isset($_SESSION['status'])){
        header ('location:login.php');

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../logout/logout.php">LOG OUT</a>
</body>
</html> 