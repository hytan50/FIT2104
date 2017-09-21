<?php
    require_once ("../config.php");

    function adminLogin($username, $password){
        global $conn;
        $query = "select * from admin where username = ? AND password = SHA2(?, 0)";
        $pquery = $conn->prepare($query);
        $pquery->bind_param("ss", $username, $password);
        $pquery->execute();
        $result = $pquery->get_result();
        $row = $result->fetch_assoc();

        if ($row){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            return true;
        }
        else{
            return false;
        }

    }

    function adminLogout(){
        if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
            session_unset();
            session_destroy();
            return true;
        }
        else{
            echo "Unexpectable error occurred. Session variables are unset";
            return false;
        }
    }
?>