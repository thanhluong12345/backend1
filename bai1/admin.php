<?php
    session_start();
    if( !isset( $_SESSION["username"] ) && !isset( $_SESSION["password"] ) ) {
        header( "Location: ./login.php" );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    Xin chào: <?=$_SESSION["username"]?>

    <br>
    <br>

    <a href="./logout.php">Logout</a>
</body>
</html>