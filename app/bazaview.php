
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Baza Borac</title>
  </head>
  <body>

<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-sm-12">

                <form action="insert.php" method="post">
  

    
      <input type=" text" placeholder="ime" name="ime">
      <input type=" text" placeholder="prezime" name="prezime">
        <input type=" text" placeholder="datum rodjenja" name="datum_rodjenja">

      
      <input type="text"  placeholder="kontakt" name="kontakt">


      <input type="text" placeholder="clanarina" name="clanarina">
      <input type="text"  placeholder="program" name="program">
      <input type="hidden" placeholder="email" name="email">
      <input type="hidden" placeholder="password" name="password">
      <button type="submit">Upiši</button><br>
     



  

  </form>





    
          <table class="table table-striped table-dark">

  
    
        
  <thead>
    <tr>
       <th scope="col">#</th>
      <th scope="col">ime</th>
      <th scope="col">prezime</th>
      <th scope="col">datum rođenja</th>
      <th scope="col">kontakt</th>
       <th scope="col">datum upisa</th>
        <th scope="col">clanarina</th>


      

    </tr>
</thead>
  <tbody>
    <?php foreach ($rezultat as $row): ?> 
   <?php echo "<tr><td>".$row['id']."</td><td>".$row['ime']."</td><td>".$row['prezime']."</td><td>".$row['datum_rodjenja']."</td><td>".$row['kontakt']."</td>"."</td><td>".$row['datum upisa']."</td><td>".$row['clanarina']."</td><td>".$row['program']."</td>";?><td><a href="delete.php?id=<?php echo $row['id'] ?>">delete</a> <a href="update.php?id=<?php echo $row['id'] ?>">update</a></td></tr>
   
  <?php endforeach ?>
    
  </tbody>
  
</table>





    </div>
  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

