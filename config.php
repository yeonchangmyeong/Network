<?php
session_start();
$host = "localhost";
$user = "root";
$password = "12345678";
$dbname = "login";
$capdbname = "capture";
$con = mysqli_connect($host,$user,$password,$dbname);

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}


$capcon = mysqli_connect($host,$user,$password,$capdbname);

if (!$capcon) {
 die("Connection failed: " . mysqli_connect_error());
}
