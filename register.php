<?php
    $username = "Empty";
    $password = "Empty";

    if( isset($_POST["username"]) && isset($_POST["password"]) ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>
    <form action="./register" method="post">
        <h1> Form register </h1>
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter username">
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter password">
        </p>
        <p>
            <input type="submit" value="Register">
        </p>
    </form>

    <table>
        <tr>
            <th>Username</th>
            <th>Full name</th>
        </tr>
        <tr>
            <td><?php echo $username ?></td>
            <td><?php echo $password ?></td>
        </tr>
    </table>
</body>
</html>