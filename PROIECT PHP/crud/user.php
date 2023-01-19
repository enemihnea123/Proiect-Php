<?php
include 'connect.php';
if (isset($_POST['submit'])){

    $name= $_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password = $_POST['password'];
    $sql="insert into `clienti` (name, email, mobile, password) 
    values('$name','$email','$mobile', '$password')";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "Data Inserted succesfully";
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
                <input type="text" class="form-control" placeholder="Introduceti Numele dvs." name="name" autocomplete="off" >
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Introduceti Email-ul dvs." name="email"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nr. de telefon</label>
                <input type="text" class="form-control" placeholder="Introduceti numarul dvs." name="mobile"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Parola</label>
                <input type="text" class="form-control" placeholder="Introduceti parola dvs." name="password"autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Trimite</button>
        </form>
    </div>
</body>

</html>