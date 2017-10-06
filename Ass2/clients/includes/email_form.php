<body>
<form method="post" action="email.php">
    <table border="1" width="90%" style="border-color: #EEEEEE;">
        <!-- this section is to select the target clients that receives the message-->
        <?php
        $query = "SELECT * FROM client";
        $result = $conn->query($query);
        while ($row = $result->fetch_array()) {
            if ($row["is_subscribed"]) {
                ?>
                <tr>
                    <td align="center"
                        bgcolor="#98fb98"><?php echo $row["first_name"] . " " . $row["last_name"] . "<br />" . $row["email"] ?> </td>
                    <td align="center" bgcolor="#98fb98"><input type="checkbox" name="to[]"
                                                                value="<?php echo $row["email"]; ?>"></td>
                </tr>
            <?php
            }
            if ($row = $result->fetch_array()) {
                //check if there is more rows
                if ($row["is_subscribed"]) {
                    ?>
                    <tr>
                        <td align="center"
                            bgcolor="#98fb98"><?php echo $row["first_name"] . " " . $row["last_name"] . "<br />" . $row["email"] ?> </td>
                        <td align="center" bgcolor="#98fb98"><input type="checkbox" name="to[]"
                                                                    value="<?php echo $row["email"]; ?>"></td>
                    </tr>

                <?php }
            }
        }?>

        <!-- below is the message section for he email  -->
        <tr>
            <td align="center" bgcolor="#3cb371" style="font-weight:bold">From : </td>
            <td> &nbsp; Harry Helper &lt; harry.helper@monash.edu.au&gt; </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#3cb371" style="font-weight:bold">Subject : </td>
            <td><input type="text" name="subject" style="width: 900px; border: none"></td>
        </tr>
        <tr>
            <td align="center" bgcolor="#3cb371" style="font-weight:bold">Message : </td>
            <td valign="center" align="left">
                <textarea cols="68" name="message" rows="9" style="width: 900px; resize:none; border: none;" required></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><br /><input type="submit" value="Send Email">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>

</form>
</body>
