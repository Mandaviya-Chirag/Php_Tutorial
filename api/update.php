<?php

$connection = mysqli_connect("localhost", "root", "", "users");

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];


$q = "UPDATE just SET name='$name', password='$password' WHERE id='$id'";
$result = mysqli_query($connection, $q);

echo "updated!!!!";
