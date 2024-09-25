<?php 

    session_start();

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: index.php');
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
    <?php include "layout/headerDash.html" ?>
    <h1> DASHBOARD NODERED </h1>
    <h2> WAKAKAKAKAK </h2>

    <i>Welcome Buacckkk, <?= $_SESSION["user"] ?></i>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>