<?php
    require_once("../config.php");
    require_once ("functions.php");
    // Handle login and logout attempts

    if (!isset($_SESSION["username"])){
?>
        <!DOCTYPE html>
        <html>
        <center><h3>Login</h3></center>
        <form method="post" action="login_logout.php?Action=login">
            <table align="center" cellpadding="3">
                <tr>
                    <td><b>Username : </b></td>
                    <td><input type="text" name="username" size="30" value=""></td>
                </tr>
                <tr>
                    <td><b>Password: </b></td>
                    <td><input type="text" name="password" size="30" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"></td>
                    <td><input type="button" value="Back" OnClick="window.location='admin.php'"></td>    <!--subject to change, window.location back to previous page-->
                </tr>
            </table>
        </form>
        </html>
<?php
    }
    else {
        ?>
        <form method="post" action="login_logout.php?Action=logout">
            <table align="center" cellpadding="3">
                <tr>
                    <td><input type="submit" value="Logout"></td>
                </tr>
            </table>
        </form>
<?php
    }
?>

