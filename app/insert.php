<?php
require "conn.php";

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$datum_rodjenja=$_POST['datum_rodjenja'];
$kontakt=$_POST['kontakt'];
$clanarina=$_POST['clanarina'];
$program=$_POST['program'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT into evidencija (ime, prezime, datum_rodjenja, kontakt, clanarina, program, email, password)
 VALUES ('$ime','$prezime','$datum_rodjenja','$kontakt','$clanarina','$program','$email','$password')";


$query=mysqli_query ($conn,$sql);

if ($query) {
	header('Location:indexb.php');
}

else {

	echo "nije uslelo";
}

?> 