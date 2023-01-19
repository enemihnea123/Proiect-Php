<?php

include 'connect.produse.php';

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

$sql="delete from `produse` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){

       // echo "Eliminata cu succes !";
        header('location:display.produse.php');
    }else{
        die(mysqli_error($con));

    }

}






?>