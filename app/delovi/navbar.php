
  
  	<nav class="navbar navbar-epand navbar-light bg-dark bg-primary ">
  		<a  class="navbar-brand ">Borac app</a>
  		<ul class="navbar-nav ml-auto ">
  			<?php if(isset($_SESSION['email'])): ?>
  				<li class="nav-item "><a href="logout.php" class=" nav-link">Odjavi se</a></li>
  				<?php else: ?>
  					<li class="nav-item"><a href="loginview.php" class="nav-link">Prijava</a></li>
  			<li class="nav-item"><a href="registracija.php" class="nav-link">Registracija</a></li>
      
  		<?php endif ?>
  			
  		</ul>
  	</nav>

