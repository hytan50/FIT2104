<?php
  require_once("../config.php");
  require_once("includes/functions.php");

  // When a form has been submitted
  switch($_POST["action"]) {
    case "update":
      updateProject($_POST);

      // Success! Redirect to list view.
      header("Location: .");
      break;
  }

  // Set context and include the header, content and footer.
  $pageTitle = "Edit Project";
  $pageSection = "projects";
  $project = getProject($_GET["id"]);
  include_once("../includes/header.php");
  include_once("includes/edit_form.php");
  include_once("../includes/footer.php");
?>
