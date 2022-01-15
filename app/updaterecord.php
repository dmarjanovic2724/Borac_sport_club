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
$password=md5($password);


$id=$_POST['id'];
$sql="UPDATE evidencija SET ime='$ime', prezime='$prezime', datum_rodjenja='$datum_rodjenja', kontakt='$kontakt', program='$program', clanarina='$clanarina', email='$email', password='$password' WHERE id=$id";


$querty=mysqli_query($conn,$sql);


header('Location: indexb.php')

?>