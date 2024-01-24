<?php

session_start();

unset($_SESSION['loging_active']);
header("location: login.php");
?>