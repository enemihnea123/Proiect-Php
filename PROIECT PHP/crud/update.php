<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql = "Select * from `clienti` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])){

    $name= $_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password = $_POST['password'];


    $sql = "update `clienti` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password'where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "Actualizat cu succes !";
        header('location:display.php');
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
                <label>Nume</label>
                <input type="text" class="form-control" placeholder="Introduceti Numele dvs." name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Introduceti Email-ul dvs." name="email"autocomplete="off"value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Nr. de telefon</label>
                <input type="text" class="form-control" placeholder="Introduceti numarul dvs." name="mobile"autocomplete="off"value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label>Parola</label>
                <input type="text" class="form-control" placeholder="Introduceti parola dvs." name="password"autocomplete="off"value=<?php echo $password;?>>
            </div>



           



            <button type="submit" class="btn btn-primary" name="submit">Actualizati</button>
        </form>
    </div>
</body>

</html>