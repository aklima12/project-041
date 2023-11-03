<?php
include 'admin_dbcon.php';
session_start();
if(!isset($_SESSION['user_login'])){
	header('Location:admin_login_index.php'); 
}

?>


<?php
include 'admin_dbcon.php';
session_start();
if(!isset($_SESSION['user_login'])){
	header('Location:admin_dashboard.php');
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard_style.css">
    <title>FCTISOFTWARE DEVELOPMENT</title>
</head>
<body>
    <ul>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Student List</a></li>
        <li><a href="">Admisssion</a></li>
        <li><a href="">Setting</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>