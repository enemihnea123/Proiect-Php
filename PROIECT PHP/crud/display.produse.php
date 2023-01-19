<?php
include 'connect.produse.php'; ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ene Mihnea</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>


</body>
<div class="container">
<button class="btn btn-primary my-5"><a href="user.produse.php" class="text-light">Adauga Produs</a>
</button>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nume</th>
      <th scope="col">Stoc</th>
      <th scope="col">Categorie</th>
      <th scope="col">Pret (RON)</th>
      <th scope="col">Actiuni</th>
    </tr>
    <button class=" my-5 btn btn-outline-warning "><a href="user.php" class="text-dark" >Adauga Clienti</a> 
  
<button class=" my-5 btn btn-outline-warning"><a href="display.php" class="text-dark" >Tabel Clienti</a>
  </thead>
  <tbody>
  
  <?php
  $sql = "select * from `produse`";
  $result = mysqli_query($con, $sql);
  if($result){
 
while ($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $name = $row['name'];
          $Stoc = $row['Stoc'];
          $Categorie = $row['Categorie'];
          $pret = $row['pret'];
          echo '<tr>
          <th scope="row"> '.$id.' </th>
          <td>'.$name.'</td>
          <td>'.$Stoc.'</td>
          <td>'.$Categorie.'</td>
          <td>'.$pret.'</td>
          <td>
<button class="btn btn-primary"><a href="update.produse.php? updateid='.$id.' " class="text-light">Actualizati</a></button>
<button class="btn btn-danger"><a href="delete.produse.php? deleteid='.$id.' "class="text-light">Stergeti</a></button>

</td>
        </tr>';

}


  }

?> 









  </tbody>
</table>

</div>
</html>

