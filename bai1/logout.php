<?php
    session_start();
    if( isset( $_SESSION["username"] ) && isset( $_SESSION["password"] ) ) {
        unset( $_SESSION["username"] );
        unset( $_SESSION["password"] );
    }

    header( "Location: ./login.php" );