<?php
Class dbObj{
    /* Database connection start */
    var $servername = "ec2-34-197-141-7.compute-1.amazonaws.com";
    var $username = "hlphipxlcbjlwm";
    var $password = "ea2f7fd249414dbe1e27433c83057cc931dd53a782295ac070c40d29e9d8a94f";
    var $dbname = "db7lrj93isfe3h";
    var $port = "5432";
    var $conn;
    function getConnstring() {
                    $con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());

                    /* check connection */
                    if (pg_last_error()) {
                                    printf("Connect failed: %s\n", pg_last_error());
                                    exit();
                    } else {
                                    $this->conn = $con;
                    }
                    return $this->conn;
    }
}
 
?>
