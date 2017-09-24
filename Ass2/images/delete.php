<?php
    include_once("../config.php");
    $filepath = "/Ass2/schema/images/";     //subject to change to "product_image" folder
    //$dir = opendir($filepath);
    if(!empty($_POST['check'])){
        $checkbox = $_POST['check'];
        foreach ($checkbox as $check) {
            //notify user that the affected product for the image
            $query = "SELECT * FROM product_image WHERE name = ?";
            $pquery = $conn->prepare($query);
            $pquery->bind_param("s", $check);
            $pquery->execute();
            $result = $pquery->get_result();
            $row = $result->fetch_assoc();
            if ($row) {
                $squery = "SELECT * FROM product WHERE id = ?";
                $spquery = $conn->prepare($squery);
                $spquery->bind_param("i", $row["product_id"]);
                $spquery->execute();
                $sresult = $spquery->get_result();
                $srow = $sresult->fetch_assoc();

                echo "<h4>".$check." is currently use by: " . $srow['name'] . ". Product id = " . $srow["id"] . "</h4>";
            }
            else{
                echo "<h4>".$check." does not used by any product yet.</h4>";
            }
            //delete from database
            $query = "DELETE FROM product_image WHERE name=?";
            $pquery = $conn->prepare($query);
            $pquery->bind_param("s", $check);
            $pquery->execute();
            //delete from directory
            try{
                unlink($_SERVER['DOCUMENT_ROOT'].$filepath.$check);
                echo "<h4>".$check." has been successfully deleted."."</h4><br />";
            }
            catch (Exception $e){
                echo "<h4>Error: ".$e->getMessage()."</h4><br />";
            }
        }

        header("refresh:7; url=list.php");
    }
?>