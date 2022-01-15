

<?php require 'delovi/head.php';?>
<?php require 'delovi/navbar.php';?>

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-md-6 col-sm-12 text-center">
			<h1>PRIJAVA</h1>
			<form  method="post">
				
				<input type="text" placeholder="email" name="email" class="form-control">
				<input type="password" placeholder="password" name="password" class="form-control">
				<button type="submit" class="btn btn-primary form-control">Prijavi se</button>


				<?php
session_start();
require "conn.php";



 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

$data = $_POST;
$password=$_POST['password'];
if (empty($data['email']) || empty($data['password'])) {
		echo "*Potrebno je popuniti sva polja!";
		return;
		}


$email=$_POST['email'];
$password=md5($_POST['password']);

$sql="SELECT * FROM evidencija 
viberWHERE email = '$email' AND password ='$password' ";
$query=mysqli_query($conn,$sql);

$_SESSION['ime']=$_POST['ime'];

$_SESSION['email']=$_POST['email'];



	if (mysqli_num_rows($query)>0) {

		$result= mysqli_fetch_assoc($query);
		
		if ($result['email']=='borac@admin.com') {
			header('Location:indexb.php');
		}
		elseif ($result['email']=='borac@online.com') {
			header('Location:onlinetrening.php');
		}
		else
			{
				header('Location:clan.php');

			}
	}else {
		header('Location:index.php');
	}

}
?>

			</form>
		</div>
	</div>
</div>
<?php require 'delovi/footer.php';?>












    
