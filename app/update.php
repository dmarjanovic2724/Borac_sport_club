<?php 

require "conn.php";

$id=$_GET['id'];
$sql="SELECT * FROM evidencija WHERE id=$id";

$query=mysqli_query($conn,$sql);
$rezultat= mysqli_fetch_assoc($query);


require "updateview.php";

?>

