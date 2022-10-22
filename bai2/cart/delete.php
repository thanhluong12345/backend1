<?php
    session_start();

    require "./carts.php";
    $carts = new Carts;

    $id = $_GET["id"];

    //delete product to cart
    $carts->deleteCart( $id );

    header( "Location: ./index.php" );
    exit;
