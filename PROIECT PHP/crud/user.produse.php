<?php
include 'connect.produse.php';
if (isset($_POST['submit'])){

    $name= $_POST['name'];
    $Stoc=$_POST['Stoc'];
    $Categorie=$_POST['Categorie'];
    $pret = $_POST['pret'];
    $sql="insert into `produse` (name, Stoc, Categorie, pret) 
    values('$name','$Stoc','$Categorie', '$pret')";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "Data Inserted succesfully";
        header('location:display.produse.php');
} else {
    die(mysqli_error($con));
}
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    <title>Proiect Ene Mihnea Gabriel Grupa 614</title>
</head>

<body>
    <h1>Proiect PhP</h1>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Produs</label>
                <input type="text" class="form-control" placeholder="Introduceti numele produsului." name="name" autocomplete="off" >
            </div>
            <div class="form-group">
                <label>Stoc</label>
                <input type="text" class="form-control" placeholder="Introduceti stocul produsului." name="Stoc"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Categorie</label>
                <input type="text" class="form-control" placeholder="Introduceti categoria produsului." name="Categorie"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Pret (RON)</label>
                <input type="text" class="form-control" placeholder="Introduceti pretul produsului." name="pret"autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Trimite</button>
        </form>
    </div>
</body>

</html>