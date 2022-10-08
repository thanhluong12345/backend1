

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
    $menu = array(
        "monkhaivi"=>array(
            "Gỏi ngó sen",
            "Salat cá ngừ",
            "Bò trộn rau thơm",
            "Thịt nguội"
        ),
        "monchinh"=>array(
            "Bò hầm",
            "Cá chẽm sốt cà",
            "Tôm rang muối",
            "Cua sốt me"
        ),
        "montrangmieng"=>array(
            "Chè hạt sen",
            "Bánh plan",
            "Rau câu"
        )
    );
    
    $menu_title = array("monkhaivi"=>"Món khai vị",
        "monchinh"=>"Món chính",
        "montrangmieng"=>"Món tráng miệng"
    );

    $result = array();
    if( isset($_POST["monkhaivi"]) ) {
        if( isset( $_POST["monkhaivi"] ) ) {
            $result["monkhaivi"] = $_POST["monkhaivi"];
        }

        if( isset( $_POST["monchinh"] ) ) {
            $result["monchinh"] = $_POST["monchinh"];
        }

        if( isset( $_POST["montrangmieng"] ) ) {
            $result["montrangmieng"] = $_POST["montrangmieng"];
        }
    }
?>
    <h1>Thực đơn</h1>
    <form action="exe4.php" method="post">
        <table>
            <tr>
                <?php 
                foreach( $menu as $key => $item ) { ?>
                <td>
                    <p> <?=$menu_title[$key]?> </p>
                    <select name="<?=$key?>[]" id="" multiple>
                        <?php 
                        foreach( $item as $key2 => $val ) { ?>
                            <option value="<?=$key2?>"> <?=$val?> </option>
                        <?php } ?>
                    </select>
                </td>
                <?php } ?>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>


    <?php if( isset($_POST["submit"]) ) { ?>
        <table style="margin-top: 50px;" class="border">
            <tr>
                <?php 
                foreach( $menu_title as $val ) { ?>
                <th><?=$val?></th>
                <?php } ?>
            </tr>
            <tr>
                <?php 
                foreach( $menu as $key => $item ) { ?>
                    <td>
                    <?php if( isset($result[$key]) ) { ?>
                        <?php foreach( $result[$key] as $val ) { ?>
                             <div> ● <?=$item[$val]?> </div>
                     <?php } ?>
                        <?php } ?>
                    </td>
                <?php } ?>
            </tr>
        </table>
    <?php } ?>
</body>
</html>