<?php
    require_once("../config.php");
    require_once("functions.php");
    switch($_GET["Action"]) {
        case "login":
            $username = $_POST["username"];
            $password = $_POST["password"];
            $loginSuccess = adminLogin($username, $password);
            if ($loginSuccess) {
                echo "Login success. Transferring you to destination page...";
                //redirect user to login page after displaying the above message
                if (isset($_SESSION["destinationURL"])) {
                    header("refresh:2; url=" . $_SESSION["destinationURL"]);   //testing.php is only for testing purpose, subject to change
                }
                else{
                    //redirect user to homepage
                    header("refresh:2; url=testing.php");
                }
            }
            else{
                echo "Login failed. Please try again";
                header("refresh:2; url=admin.php");
            }
            break;
        case "logout":
            $logoutSuccess = adminLogout();
            if ($logoutSuccess) {
                echo "You logout successfully";
                header("refresh:2; url=admin.php");
            }
            break;


    }