<?php

class Carts {

    //get cart
    public function getCartAll( $key = "cart" ) {
        if( $_SESSION[$key] ) {
            $carts = $_SESSION[$key];
            return $carts;
        }else {
            return array();
        }
    } 

    //set cart
    public function setCart( $data, $key = "cart" ) {
        if( $key && $data ) {
            if( $_SESSION[$key][$data["id"]] ) {
                $_SESSION[$key][$data["id"]] += $data["num"];
            }else {
                $_SESSION[$key][$data["id"]] = $data["num"];
                
            }
        }
    }

    //delete cart
    public function deleteCart( $id, $key = "cart" ) {
        if( $key && $id ) {
            unset( $_SESSION[$key][$id] );
        }
    }
}