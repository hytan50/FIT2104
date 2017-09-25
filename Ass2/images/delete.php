<?php
  include_once("../config.php");
  include_once("includes/functions.php");
  $filepath = "/Ass2/schema/images/";     //subject to change to "product_image" folder
  //$dir = opendir($filepath);
  if(!empty($_POST['check'])){
    $checkbox = $_POST['check'];
    foreach ($checkbox as $check) {
      //notify user that the affected product for the image
      $row = getProductDescription($check);
      if ($row) {
        $srow = getProduct($row["product_id"]);
        echo "<h4>".$check." is currently use by: " . $srow['name'] . ". Product id = " . $srow["id"] . "</h4>";
      } else {
        echo "<h4>".$check." does not used by any product yet.</h4>";
      }
      //delete from database
      deleteProductImage($check);

      //delete from directory
      try {
        unlink($_SERVER['DOCUMENT_ROOT'].$filepath.$check);
        echo "<h4>".$check." has been successfully deleted."."</h4><br />";
      } catch (Exception $e){
        echo "<h4>Error: ".$e->getMessage()."</h4><br />";
      }
    }

    header("refresh:10; url=list.php");
  }
?>
