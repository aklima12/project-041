<?php
session_start();
unset($_SESSION['user_login']);
session_destroy();
header('location:login_index.php');


?>