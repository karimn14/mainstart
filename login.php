<?php 
    include "service/database.php";

    session_start();

    $msg = "";
    if ( isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash('sha256', $password);

        $sql = "SELECT * FROM accdata WHERE Nama='$username' AND Password='$hash_password'";

        $result = $db->query($sql);

        if ($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $_SESSION["user"] = $data["Nama"];
            $_SESSION["is_login"] = true;

            header("location: dashboard.php");
        } else {
            $msg = "Invalid Username";
        }
        $db->close();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <?php include "layout/header.html" ?>

    <h2>Login Page</h2>

    <i><?= $msg ?> </i>

    <form class="form_acc" action="login.php" method="POST">
        <div>
            <input type="text" placeholder="username" name="username"></input>
        </div>
        <div>
            <input type="password" placeholder="password" name="password"> </input>
        </div>
        <button type="submit" name="login">Login</button>

    </form>    

    <?php include "layout/footer.html" ?>
</body>
</html>
