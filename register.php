<?php
    include "service/database.php";

    $register_msg = "";

    if (isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO accdata (Nama, Password) VALUES 
        ('$username', '$password')";

        if ($db->query($sql)){
            $register_msg = "DATA SSCC INSERTED";
        } else{
            $register_msg = "DATA NICE TRY";
            echo "TRY AGAIN LATER";
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h2> Register Page </h2>

    <h4> <?= $register_msg ?> </h4>

    <form action="register.php" method="POST" class="form_acc">
        <input type="text" placeholder="username" name="username">username</input>
        <input type="password" name="password"> </input>
        <button type="submit" name="submit">Submit</button>

    </form>    

    <?php include "layout/footer.html" ?>
</body>
</html>