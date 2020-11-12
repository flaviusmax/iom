<?php

include 'bd.php';

//deschid conexiunea
$conn = deschidConn();

//scriem calea pentru foto upload
$target = "images/";
$target = $target . basename( $_FILES['photo']['name']); 

// preluam datale din formular
$utilizator=$_POST['utilizator'];
$prenume=$_POST['prenume'];
$nume=$_POST['nume'];
$email=$_POST['email'];
$parola=$_POST['parola'];
$pic=($_FILES['photo']['name']);

//echo "$utilizator $prenume $nume $email $parola $pic ";


//datele sanitize
$san_utilizator = mysqli_real_escape_string( $conn, $_POST['utilizator']);
$san_prenume = mysqli_real_escape_string( $conn, $_POST['prenume']);
$san_nume = mysqli_real_escape_string( $conn, $_POST['nume']);
$san_email = mysqli_real_escape_string( $conn, $_POST['email']);
$san_parola = mysqli_real_escape_string( $conn, $_POST['parola']);

//criptam parola
$parola_c = hash('sha512', $san_parola);
//$parola_c = hash('sha512', $_POST['parola']);

// echo $san_utilizator . $parola_c . echo $pic;



// salvam datele in DB
$into_sql = "INSERT INTO users (utilizator, first_name, last_name, email, parola, image) VALUES ('$san_utilizator', '$san_prenume', '$san_nume', '$san_email', '$parola_c', '$pic')";  
//scriem button submit si ne asiguram ca s-a scris cu succes
if (mysqli_query($conn, $into_sql)) {
    echo "</br> Utilizatorul: $utilizator cu NUMELE: $prenume - $nume, EMAIL $san_email a fost adaugat cu succes!";
  } else {
    echo "Error: " . $into_sql . "<br>" . mysqli_error($conn);
  }

  
//si scriem upload in server a pozei

if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){

  echo "</br> Imaginea ". basename( $_FILES['photo']['name']). " a fost incarcata cu succes!";
  }
  else {
  
  echo "IMAGINEA NU A PUTUT FI INCARCATA!"; 
  }

// la urma inchidem connexiunea cu DB
inchidConn($conn);
?>