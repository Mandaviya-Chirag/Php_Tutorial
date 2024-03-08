<?php

$id = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "", "users");
$q = "DELETE FROM just WHERE `id` = $id";

mysqli_query($connection, $q);

echo "deleted !!";

