<?php
    function connect() {
        //connection values
        $db_host = '127.0.0.1';
        $db_user = 'root';
        $db_password = '';
        $db_name = 'test';
        //connection
        global $conn;
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("<p>Connection failed: ".mysql_error()."</p>");
        return $conn;
        }
?>