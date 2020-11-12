<?php

//scriem calea pentru foto upload
$target = "images/";
$target = $target . basename( $_FILES['photo']['name']); 


// preluam datale din formular
//$name=$_POST['name'];
//$email=$_POST['email'];
//$phone=$_POST['phone'];
//$pic=($_FILES['photo']['name']); 


//si pentru ca exista vulnerabilitate la sql injection folosim


//ne conectam la DB
//$con = mysql_connect("localhost", "flavi", "zzxxzz") or die(mysql_error()) ;
//$db = mysql_select_db("iomundo") or die(mysql_error()) ; 


 $dbhost = "localhost";
 $dbuser = "flavi";
 $dbpass = "zzxxzz";
 $db = "iomundo";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db)  or die("Connect failed: %s\n". $conn -> error);
 
	
	
 

$san_utilizator = mysqli_real_escape_string( $conn, $_POST['utilizator'] );	
$san_prenume = mysqli_real_escape_string( $conn, $_POST['prenume'] );	
$san_nume= mysqli_real_escape_string( $conn, $_POST['nume'] );	
$san_email = mysqli_real_escape_string( $conn, $_POST['email'] );
//$san_parola = mysqli_real_escape_string( $con, $_POST['password'] )

$parola_c = hash('sha512', $_POST['password']);
//adaugam si poza
$pic=($_FILES['photo']['name']); 

//$into_sql = "INSERT INTO users (utilizator, first_name, last_name, email, parola) VALUES ('$san_utilizator', '$san_nume', '$san_prenume', '$san_email', '$parola_c')"; 
//$sql = "INSERT INTO users (utilizator, first_name, last_name, email, password) VALUES ('ushu', 'Flavius', 'gg	34', 'fff@example.com', '1234456')";


//ca sa avem confirmarea ca s-a scris in DB
// functia  mysqli_query($(connection, query, result_mode)
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//si scriem uplodam in server

if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){

echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

echo "Sorry, there was a problem uploading your file."; 
}
?> 