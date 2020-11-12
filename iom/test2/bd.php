<?php
function deschidConn()
 {
 $dbhost = "localhost";
 $dbuser = "flavi";
 $dbpass = "zzxxzz";
 $db = "iomundo";
 
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db)  or die("Connect failed: %s\n". $conn -> error);
  echo "<br/>Conectare Reusita</br>";

	
	return $conn;

 }
 
function inchidConn($conn)
 {
 $conn -> close();
 echo "<br/> End ";
 }
   
?>