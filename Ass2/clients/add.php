<?php
  require_once("../config.php");
  require_once("includes/functions.php");

  if (isset($_POST["action"]) && $_POST["action"] == "add") {
    createClient($_POST);

    // Success! Redirect to list view.
    header("Location: .");
  }

  // Set context and include the header, content and footer.
  $pageTitle = "Add Client";
  $pageSection = "clients";
  include_once("../includes/header.php");
  include_once("includes/add_form.php");
  include_once("../includes/footer.php");
?>
