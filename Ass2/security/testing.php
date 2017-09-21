<?php
    require_once("../config.php");
    require_once("../functions.php");
    $currentURL = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
    if (auth($currentURL)) {
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