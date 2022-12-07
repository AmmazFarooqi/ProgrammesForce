<?php


if (!isset($_SESSION['email'])) {
    header("location: http://localhost/crud_app/login.php");
}

include('dp_con.php');
session_start();
unset($_SESSION['email']);
session_destroy();
header("location: http://localhost/crud_app/login.php");