
<?php

require "conn.php";

$id=$_GET['id'];
$sql="DELETE FROM evidencija WHERE id=$id";

$query=mysqli_query($conn,$sql);

header('Location:indexb.php');

?>