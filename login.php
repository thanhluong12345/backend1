<?php
    require_once "user.php";
    $username = "";
    $password = "";
    $login_check = false;

    if( isset($_POST["username"]) && isset($_POST["password"]) ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $user_one = new User("admin", "12345", "Nguyen", "Luong");
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $login_check = $user_one->login($username, $password_hash);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action="./login.php" method="post">
        <h1> Form login </h1>
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter username">
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter password">
        </p>
        <p>
            <input type="submit" value="Login">
        </p>

        <p>
            <?php
                if( $login_check ) {
                    echo "Logged in successfully";
                }
            ?>
        </p>
    </form>
</body>
</html>