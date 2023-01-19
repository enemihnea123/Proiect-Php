<?php

include 'connect.php';

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

$sql="delete from `clienti` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){

       // echo "Eliminata cu succes !";
        header('location:display.php');
    }else{
        die(mysqli_error($con));

    }

}






?>