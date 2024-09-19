<?php 
    include "service/database.php";

    if ( isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        echo "login account succeed!";
        echo $username . '' . $password;

        $sql = "SELECT * FROM accdata WHERE username=$username AND password=$password";

        $result = $db->query($sql);

        if ($result->num_rows > 0){
            $data = $result->fetch_assoc();
            echo "SUCCESS CHECK" . $data["username"];

            header("location: dashboard.php");
        } else {
            echo "ERROR CHECK";
        }
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

    <form class="form_acc" action="login.php" method="POST">
        <div>
            <input type="text" placeholder="username" name="username"></input>
        </div>
        <div>
            <input type="password" placeholder="password" name="password"> </input>
        </div>
        <button type="submit" name="submit">Submit</button>

    </form>    

    <?php include "layout/footer.html" ?>
</body>
</html>
