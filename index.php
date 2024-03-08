<?php

$connection = mysqli_connect('localhost', 'root', '', 'users');
$q = "SELECT * FROM just";
$result = mysqli_query($connection, $q);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

$index = 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <form>
        <label>Username</label>
        <input type="text" id="name">
        <label>password</label>
        <input type="text" id="password">
        <button type="submit" onclick="sendData()">add</button>
    </form>


    <table border="2">
        <thead>
            <tr>
                <th>Index</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
         <tbody>
            <?php foreach ($users as $row) { ?>
                <tr>
                    <td><?= ++$index ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><a href="updateform.php?id=<?=$row['id']?>">update</a></td>
                    <td><a href="api/delete.php?id=<?= $row['id'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    <script src="./js/jquery.min.js"></script>
    <script>
        function sendData() {
            var name = $("#name").val();
            var password = $("#password").val();

            $.ajax({
                url: "./api/insert.php",
                method: "POST",
                data: {
                    name: name,
                    password: password
                },
                success: function (response) {
                    console.log(response);
                    if (response) {
                        console.log("inserted");
                    } else {
                        console.log("try again");
                    }
                }
            });
        }
    </script>
   
</body>

</html>