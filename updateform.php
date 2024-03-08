<?php

$connection = mysqli_connect('localhost', 'root', '', 'users');
$id = $_GET['id'];
$q = "SELECT * FROM just WHERE id = $id";
$result = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($result);   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>

        <form action="./api/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label>Username</label>
        <input type="text" id="name" name="name" value="<?= $row['name'] ?>">
        <label>password</label>
        <input type="text" id="password"  name="password" value="<?= $row['password'] ?>">
        <button type="submit" onclick="updateData()">update</button>
    </form>

      <script src="./js/jquery.min.js"></script>
    <script>
        function updateData() {
            var name = $("#name").val();
            var password = $("#password").val();

            $.ajax({
                url: "./api/update.php",
                method: "POST",
                data: {
                    name: name,
                    password: password
                },
                success: function (response) {
                    console.log(response);
                    if (response) {
                        console.log("updated!!!");
                                window.location.href = "./index.php"
                    } else {
                        console.log("try again");
                    }
                }
            });
        }
    </script>
</body>
</html>