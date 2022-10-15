<?php 
    if( isset( $_POST["submit"] ) ) { 
        $date_input = $_POST["date"];
        $date = str_replace('/', '-', $date_input); 

        $day = date( "d", strtotime($date) );
        $month = date( "m", strtotime($date) );
        $year = date( "Y", strtotime($date) );

        $date_vn = "Ngày $day, tháng $month, năm $year";
        $date_en = date('l, F, jS, Y', strtotime($date));
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE2</title>
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
    <h2>BÀI TẬP ĐỊNH DẠNG NGÀY</h2>

    <div class="flex">
        <div class="box-center">
            <form action="./exe2.php" method="post">
                <table>
                    <tr>
                        <td>Nhập ngày: </td>
                        <td><input type="text" name="date" value="<?=($date_input??"")?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Gửi"></td>
                    </tr>
                </table>
            </form>

            <div style="margin-top: 50px;">
                <?php if( isset( $_POST["submit"] ) ) { ?>
                    Ngày đã nhập: <?=$date_input?>
                    <br>
                    a. <?=$date_vn?>
                    <br>
                    b. <?=$date_en?>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>