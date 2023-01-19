<?php
include 'connect.produse.php';
$id=$_GET['updateid'];

$sql = "Select * from `produse` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$Stoc = $row['Stoc'];
$Categorie = $row['Categorie'];
$pret = $row['pret'];

if (isset($_POST['submit'])){

    $name= $_POST['name'];
    $Stoc=$_POST['Stoc'];
    $Categorie=$_POST['Categorie'];
    $pret = $_POST['pret'];


    $sql = "update `produse` set id=$id, name='$name', Stoc='$Stoc', Categorie='$Categorie', pret='$pret'where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "Actualizat cu succes !";
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
                <input type="text" class="form-control" placeholder="Introduceti Numele dvs." name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Stoc</label>
                <input type="text" class="form-control" placeholder="Introduceti Email-ul dvs." name="Stoc"autocomplete="off"value=<?php echo $Stoc;?>>
            </div>
            <div class="form-group">
                <label>Categorie</label>
                <input type="text" class="form-control" placeholder="Introduceti numarul dvs." name="Categorie"autocomplete="off"value=<?php echo $Categorie;?>>
            </div>
            <div class="form-group">
                <label>Parola</label>
                <input type="text" class="form-control" placeholder="Introduceti parola dvs." name="pret"autocomplete="off"value=<?php echo $pret;?>>
            </div>



           



            <button type="submit" class="btn btn-primary" name="submit">Actualizati</button>
        </form>
    </div>
</body>

</html>