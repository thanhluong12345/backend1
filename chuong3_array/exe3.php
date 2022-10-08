
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $thongTinNguoiDung = array("name"=>"","email"=>"","website"=>"","comment"=>"","gender"=>"");

    if( isset( $_POST["name"] ) ) {
        $thongTinNguoiDung["name"]       = $_POST["name"];
        $thongTinNguoiDung["email"]      = $_POST["email"];
        $thongTinNguoiDung["website"]    = $_POST["website"];
        $thongTinNguoiDung["comment"]    = $_POST["comment"];
        $thongTinNguoiDung["gender"]     = $_POST["gender"];
    }
?>
    <form action="exe3.php" method="post">
        <table><tr>
                <td>Tên:</td>
                <td><input type="text" name="name" placeholder="Enter name..." value="<?=$thongTinNguoiDung["name"]?>"></td>
            </tr>
            <tr><td>E-mail:</td>
                <td><input type="email" name="email" placeholder="Enter E-mail..." value="<?=$thongTinNguoiDung["email"]?>"></td>
            </tr>
            <tr><td>Website:</td>
                <td><input type="text" name="website" placeholder="Enter Website..." value="<?=$thongTinNguoiDung["website"]?>"></td>
            </tr>
            <tr><td>Comment:</td>
                <td><textarea name="comment" id="" cols="30" rows="10" placeholder="Comments..."><?=$thongTinNguoiDung["comment"]?></textarea></td>
            </tr>
            <tr><td>Giới tính:</td>
            <td>
                    <input type="radio" name="gender" id="female" value="Female" <?=($thongTinNguoiDung["gender"]=="Female")?"checked":""?>> <label for="female">Female</label>
                    <input type="radio" name="gender" id="male" value="Male" <?=($thongTinNguoiDung["gender"]=="Male")?"checked":""?>> <label for="male">Male</label>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php if( isset( $_POST["submit"] ) ) { ?>
        <table style="margin-top: 50px;">
            <tr>
                <td>Name:</td>
                <td><?=$thongTinNguoiDung["name"]?></td>
            </tr><tr>
                <td>Email:</td>
                <td><?=$thongTinNguoiDung["email"]?></td>
            </tr> <tr>
                <td>Website:</td>
                <td><?=$thongTinNguoiDung["website"]?></td>
            </tr><tr>
                <td>Comments:</td>
                <td><?=$thongTinNguoiDung["comment"]?></td>
            </tr><tr>
                <td>Gender:</td>
                <td><?=$thongTinNguoiDung["gender"]?></td>
            </tr>
        </table>
    <?php } ?>
</body>
</html>