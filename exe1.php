<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE1</title>
    <style>
        h2, .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2> Bài tập 1(chuỗi) </h2>
    <div class="center">
    <?php 
        $txt = "Chào mừng các bạn đến với môn học Lập Trình Web Back-end 1";
        $re_txt = str_replace(" ", "<br>", $txt);
        echo $re_txt;
    ?>
    </div>
</body>
</html>