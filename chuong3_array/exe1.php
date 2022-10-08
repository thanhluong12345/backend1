<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE1</title>

    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $sinhvien = array(
            'sv1'=> array('Tinhoc'=>10,'KTLT'=>8,'MMT'=>10),
            'sv2'=> array('Tinhoc'=>8,'KTLT'=>8,'MMT'=>9),
            'sv3'=> array('Tinhoc'=>9,'KTLT'=>7,'MMT'=>8),
        );
    ?>

    <table>
        <tr>
            <th>Họ tên</th>
            <th>Tin học</th>
            <th>KTLT</th>
            <th>MMT</th>
        </tr>
        <?php foreach( $sinhvien as $key => $item ){ ?>
            <tr>
                <td><?php echo $key ?></td>
                <?php foreach( $item as $val ){ ?>
                    <td> <?php echo $val ?> </td>
                <?php } ?>  
            </tr>
        <?php } ?>    
    </table>
</body>
</html>