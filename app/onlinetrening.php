
<?php session_start(); ?>
<?php require 'delovi/head.php';?>
<?php require 'delovi/navbar.php';?>
<?php require 'conn.php'; ?>

<?php 

if (!isset($_SESSION['email']))  {

header('location: index.php');}
  
?>


<div class="container">
  <h2 class="py-2 text-center">RAD, TRUD, ZALAGANJE = REZULTAT<i class="fas fa-check"></i></h2>
  <img src="sadrzaj/koncept12.jpg" class="img-fluid" alt="Responsive image">
  <div class="row">


  



    <div class="col-md-12 col-sm-12 py-3 d-flex justify-content-center">




 
    </div>




  </div>
</div>




    </div>
  </div>
</div>


<?php require 'onlinesadrzaj.php';?>
  



<?php require 'delovi/footer.php';?>


