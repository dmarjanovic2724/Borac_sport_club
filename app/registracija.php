
<?php require 'delovi/head.php';?>
<?php require 'delovi/navbar.php';?>
<?php session_start(); ?>

<div class="container text-center">

  <div class="row  d-flex justify-content-center">

    <div class="col-xl-6 col-sm-3">



<?php

require "conn.php";
// define variables and set to empty values
$imeerr = $prezimeerr = $datumerr = $kontakterr = $emailErr = $passworderr = $programerr = "";
$imep = $prezimep = $datum_rodjenjap = $kontakt = $emailp = $passwordp = $programp = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $imaligreske=false;
  if (empty($_POST["ime"])) {
    $imeerr = "potrebno je upisati ime";
    $imaligreske=true;
  } else {
    $imep = test_input($_POST["ime"]);
  }

   if (empty($_POST["prezime"])) {
    $prezimeerr = "potrebno je upisati prezime";

    $imaligreske=true;
  } else {
    $prezimep = test_input($_POST["prezime"]);
  }

   if (empty($_POST["datum_rodjenja"])) {
    $datumerr = "potrebno je upisati datum rođenja";
    $imaligreske=true;
  } else {
    $datum_rodjenjap = test_input($_POST["datum_rodjenja"]);
  }

   if (empty($_POST["kontakt"])) {
    $kontakterr = "potrebno je upisati kontakt telefon";
    $imaligreske=true;
  } else {
    $kontaktp = test_input($_POST["kontakt"]);
  }
  if (empty($_POST["email"]) || (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))){
    $emailErr = "potrebno je upisati e-mail";
    $imaligreske=true;
  }

 
  else {
    $emailp = test_input($_POST["email"]);
  }
  if (empty($_POST["password"])) {
    $passworderr = "potrebno je upisati šifru";
    $imaligreske=true;
  } else {
    $passwordp = test_input($_POST["password"]);
  }
  if (empty($_POST["program"])) {
    $programerr = "potrebno je obeležiti program vežbanja";
    $imaligreske=true;
  } else {
    $programp = test_input($_POST["program"]);
  }
  


  if ($imaligreske==false) {

  $ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$datum_rodjenja=$_POST['datum_rodjenja'];
$kontakt=$_POST['kontakt'];

$program=$_POST['program'];
$email=$_POST['email'];
$password= ($_POST['password']);
$password=md5($password);




$sql="INSERT into evidencija (ime, prezime,datum_rodjenja,kontakt, program, email, password)
 VALUES ('$ime','$prezime','$datum_rodjenja','$kontakt','$program','$email','$password')";

$query=mysqli_query ($conn,$sql);


$_SESSION['ime']=$_POST['ime'];

$_SESSION['email']=$_POST['email'];





if ($query) {
  
  header("location:uspesnaregistracija.php");
}
else {
  echo mysqli_error($conn);;
  echo "nije uspela registracija";
}


}
}








function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}












?>

<h2>Registracija člana</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="text" placeholder="ime" name="ime" class=" form-control text-center">
  <span class="error"><?php echo $imeerr;?></span>
  <br><br>
   <input type="text" name="prezime" placeholder="prezime" class=" form-control text-center">
  <span class="error"><?php echo $prezimeerr;?></span>
  <br><br>

 <input type="text" name="datum_rodjenja" placeholder="datum rođenja" class=" form-control text-center">
  <span class="error"><?php echo $datumerr;?></span>
  <br><br>
  <input type="text" name="kontakt" placeholder="kontakt" class=" form-control text-center">
  <span class="error"><?php echo $kontakterr;?></span>
  <br><br>
  <input type="text" name="email" placeholder="email" class=" form-control text-center">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
 <input type="password" name="password" placeholder="password" class=" form-control text-center">
  <span class="error"><?php echo $passworderr;?></span>
  <br><br>

 
  <input type="radio" name="program" value="karate">Karate<br><input type="radio" name="program" value="fitnes">Fitnes<br><span class="error"><?php echo $programerr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Potvrdi" class="btn btn-primary form-control">  
</form>


  


    </div>
    

  </div>
  

</div>



<?php require 'delovi/footer.php';?>

