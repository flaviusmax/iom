<?php

$host = "localhost";    /* Host name */
$user = "flavi";         /* User */
$password = "zzxxzz";         /* Password */
$dbname = "iomundo";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

