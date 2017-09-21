<?php
  require_once("../config.php");

  // Set context and include the header
  $pageTitle = "Images";
  $pageSection = "images";
  include_once("../includes/header.php");
?>

<p>TODO: List images from dir.</p>

<?php
  $result->free();
  $conn->close();
  include_once("../includes/footer.php");
?>
