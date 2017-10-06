<?php
  require_once("../config.php");

  // Set context and include the header
  $pageTitle = "Clients - Sent Email";
  $pageSection = "Email";
  include_once("../includes/header.php");

  if (!isset($_POST["to"])){
    // Display the form
    include_once("includes/email_form.php");
  } else {
    $from = "From: Harry Helper <harry.helper@monash.edu.au>";  // NOTE: Emails can't be sent from non-Monash domains.
    $toAll = $_POST["to"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];
    foreach ($toAll as $to){
      $sent_success = mail($to, $subject, $message, $from);
      if($sent_success){
        echo "<h3>Mail sent successfully to ".$to ."</h3>";
      }
      else{
        echo "<h3>Error sending mail to ".$to .", please try again.</h3>";
      }
    }
  }
?>

<a href="index.php"><button class="btn btn-success btn-round">Back</button></a>

<?php
  include_once("../includes/footer.php");
?>
