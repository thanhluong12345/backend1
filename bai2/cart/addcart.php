<?php
    session_start();
    require "./carts.php";

    $carts = new Carts();
    $get_product = $_GET["product"];

    $product = array();
    foreach( $get_product as $key => $val ) {
        $product["id"] = $key;
        $product["num"] = $val;
    }
    if( !empty( $product ) ) {
        $carts->setCart( $product );
    }
    header( "Location: ./index.php" );
    exit;

