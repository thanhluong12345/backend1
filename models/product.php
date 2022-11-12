<?php

class Product extends Db{
    public function getProductAll() {
        $sql = "select * from products";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }
}