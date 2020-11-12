<!DOCTYPE html>
<html>
<head>
<title>Creare cont</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
 
  
			<form enctype="multipart/form-data" action="test2.php" method="POST">
			Utilizator: <input type="text" name="utilizator" value="" pattern='[a-zA-Z]*' placeholder="Utilizator" required><br> 
			Prenume: <input type="text" name="prenume" value="" placeholder="Prenume" ><br> 			
			Nume: <input type="text" name="nume" value="" placeholder="Nume" ><br> 
			E-mail: <input type="email" name = "email" value="" placeholder="Email" required><br> 
			Parola: <input type="password" name = "parola" pattern='[a-zA-Z]*' value=""placeholder="Alege o parola"  required><br> 
			Photo: <input type="file" name="photo"><br>
			<input type="submit" value="Submit">   </form>



	</div>
</body>
</html>