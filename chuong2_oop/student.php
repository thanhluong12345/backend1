<?php
    require_once "user.php";

    $username = "Empty";
    $firstname = "Empty";
    $lastname = "Empty";
    $gpa = "Empty";
    $rank = "Empty";

    if( isset($_POST["username"]) ) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $gpa = $_POST["gpa"];

        $student = new Student($username, $password, $firstname, $lastname, $gpa);
        $rank = $student->rank();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student page</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="./student.php" method="post">
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
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter First name">
        </p>
        <p>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter Last name">
        </p>
        <p>
            <label for="gpa">GPA:</label>
            <input type="gpa" name="gpa" id="gpa" placeholder="Enter GPA">
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>

    <table>
        <tr>
            <th>Username</th>
            <th>Full name</th>
            <th>GPA</th>
            <th>Rank</th>
        </tr>
        <tr>
            <td><?php echo $username ?></td>
            <td><?php echo $firstname. " ". $lastname ?></td>
            <td><?php echo $gpa ?></td>
            <td><?php echo $rank ?></td>
        </tr>
    </table>
</body>
</html>