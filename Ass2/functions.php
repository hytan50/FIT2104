<?php
    function auth($destinationURL){
        if (isset($_SESSION["username"])){
            header("url=".$destinationURL);
            return true;
        }
        else{
            echo "You need to login first before accessing the page.... redirect you to login page now...";
            $_SESSION["destinationURL"] = $destinationURL;
            header("refresh:2; url=admin.php");
            return false;
        }
    }