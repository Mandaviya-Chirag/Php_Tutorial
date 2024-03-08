<?php

$name = $_POST['name'];
$password =$_POST['password'];

$connection = mysqli_connect("localhost", "root", "", "users");
$q = "INSERT INTO just (name, password) VALUES ('$name', '$password')";

$result = mysqli_query($connection,$q);

echo $result; 

