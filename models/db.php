<?php

require "lib/config.php";

class Db {
    private $host = HOST;
    private $db_name = DB_NAME;
    private $username = USERNAME;
    private $password = PASSWORD;

    public function connect() {
        try {
            $dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function query( $sql ) {
        $con = $this->connect();
        $sth = $con->query($sql);
        return $sth;
    }

    public function fetchArray( $sql ) {
        $query = $this->query( $sql );
        $ret = $query->fetchAll();
        return $ret;
    }
}