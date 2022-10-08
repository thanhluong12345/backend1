<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE2</title>
</head>
<body>
    <form action="exe2.php" method="get">
        <input type="text" name="tukhoa" placeholder="Từ khóa tìm kiếm..." value="<?=isset($_GET["tukhoa"])?$_GET["tukhoa"]:""?>">
        <input type="submit" name="submit" value="Tìm">
    </form>
    <?php if( isset($_GET["tukhoa"]) ){ ?>
        <p> Kết quả tìm kiếm với từ khoá [<?=$_GET["tukhoa"]?>] </p>
        <p> với [<?=$_GET["tukhoa"]?>] được nhập vào từ form. </p>
    <?php } ?>
</body>
</html>