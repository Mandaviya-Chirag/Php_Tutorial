<?php 

$id = $_GET['id'];
$name =$_GET['name'];
$password =$_GET['password'];


$connection = mysqli_connect("localhost", "root", "", "users");
$q = "UPDATE just SET name='$name', password='$password' WHERE id='$id'";
mysqli_query($connection, $q);

if ($q == true) {

    echo "updated....";
} else {
    echo "not updated";
}

