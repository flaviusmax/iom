<!DOCTYPE html>
<html>
<head>
	<title>PHP Image resize to upload</title>
</head>
<body>


<div class="container">
<?php

include 'bd.php';

$data = mysql_query("SELECT * FROM users") or die(mysql_error());
while($info = mysql_fetch_array( $data )) {
Echo "<img src=http://localhost/iom/images/".$info['photo'] ."> <br>"; Echo "<b>Name:</b> ".$info['name'] . "<br> "; Echo "<b>Email:</b> ".$info['email'] . " <br>"; Echo "<b>Phone:</b> ".$info['phone'] . " <hr>"; } ?>
</div>


</body>
</html>