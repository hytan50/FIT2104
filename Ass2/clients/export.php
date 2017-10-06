<?php
  require("../config.php");
  require("../vendor/autoload.php");
  require("includes/createPDF.php");

  // Get a list of clients
  $query = "SELECT * FROM client";
  $result = $conn->query($query);
  $allRows = $result->fetch_all();

  // Generate the PDF
  $header = array("Client ID", "Name", "Email", "Contact No.", "Address");
  $headerWidth = array(50, 100, 200, 100, 300);
  $newpdf = new CreatePDF();
  $table = @$newpdf->ClientPDF($header, $headerWidth, $allRows);
?>
