<?php

$con = new mysqli('localhost','root','', 'itshop');

if  (!$con)
{
    die(mysqli_error($con));
}
 
?>