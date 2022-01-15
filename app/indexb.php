
<?php session_start(); ?>
<?php require 'delovi/head.php';?>
<?php require 'delovi/navbar.php';?>

<?php




require "conn.php";

if (!isset($_SESSION['email']))  {

header('location: index.php');}
  



$sql="select * from evidencija";
$query=mysqli_query($conn,$sql);

$rezultat= mysqli_fetch_all ($query, MYSQLI_ASSOC);

require "bazaview.php";
?>



<?php require 'delovi/footer.php';?>