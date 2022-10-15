<?php 
    $show = false;
    if( isset( $_POST["submit"] ) && isset( $_POST["pheptinh"] ) ) {
        $show = true;
        $soThuNhat = $_POST["sothunhat"];
        $soThuHai = $_POST["sothuhai"];

        $phepTinh = $_POST["pheptinh"];
        $result = eval('return '.$soThuNhat." ".$phepTinh." ".$soThuHai.';');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE3</title>
    <style>
        h2, .center {
            text-align: center;
        }
        .flex {
            display: flex;
        }
        .box-center {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2> PHÉP TÍNH </h2>
    <div class="flex">
        <div class="box-center">
            <form action="exe3.php" method="POST">
                <table>
                    <tr>
                        <td>Số thứ 1: </td>
                        <td><input type="text" name="sothunhat" value="<?=$soThuNhat??""?>"></td>
                    </tr>
                    <tr>
                        <td>Số thứ 2: </td>
                        <td><input type="text" name="sothuhai" value="<?=$soThuHai??""?>"></td>
                    </tr>
                    <tr>
                        <td>Chọn phép tính</td>
                    </tr>
                </table>
                <div class="flex">
                    <div style="margin-right: 10px;">
                        <input type="radio" name="pheptinh" id="cong" value="+">
                        <label for="cong">Cộng</label>
                    </div>
                    <div style="margin-right: 40px;">
                        <input type="radio" name="pheptinh" id="tru" value="-">
                        <label for="tru">Trừ</label>
                    </div>
                    <div style="margin-right: 10px;">
                        <input type="radio" name="pheptinh" id="nhan" value="*">
                        <label for="nhan">Nhân</label>
                    </div>
                    <div style="margin-right: 10px;">
                        <input type="radio" name="pheptinh" id="chia" value="/">
                        <label for="chia">Chia</label>
                    </div>
                </div>
                <br>
                <input type="submit" name="submit" value="submit">
            </form>
            <br>
            <br>
            <?php if( $show ) { ?>
                <h2> KẾT QUẢ </h2>
                <p> Tổng 2 số <?=$soThuNhat?> và <?=$soThuHai?> là: <?=$result?> </p>
            <?php } ?>
        </div>
    </div>
</body>
</html>