<?php
    require_once("config.php");

    function getCategory(){
        global $conn;
        $query = "SELECT * FROM category";
        //$result = $conn->query($query);
        return $conn->query($query);
    }

