
<?php session_start(); ?>
<?php require 'delovi/head.php';?>
<?php require 'delovi/navbar.php';?>
<?php require 'conn.php'; ?>

<?php
if (!isset($_SESSION['email']))  {

header('location: index.php');}
  
?>




<section class="py-2">
  <div class="container">
    
    <div class="row">
      <div class=" col-sm-3 lead ">

         <?php

$email=$_SESSION['email'];

$sql="SELECT * FROM evidencija WHERE email='$email'";
      $query=mysqli_query($conn,$sql);
      
    
    if (mysqli_num_rows($query) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($query)) {

    echo "Ime:"." ".$row['ime']. "<br><hr>"."Prezime:"." ".$row['prezime']. "<br><hr>"."Datum rođenja:"." ".$row['datum_rodjenja']. "<br><hr>"."Kontakt:"." ".$row['kontakt']. "<br><hr>"."Program vežbanja:"." ".$row['program']. "<br><hr>"."Datum upisa:"." ".$row['datum upisa']. "<br><hr>";
  }


} else {
  echo "0 results";
}
  
?>

      </div>
      
    </div>
  </div>
</section>

<?php require 'sadrzaj.php';?>


<?php require 'delovi/footer.php';?>

