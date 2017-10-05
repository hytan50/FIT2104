<?php
  require_once("../config.php");
  // Set context and include the header, content and footer.
  $pageTitle = "Documentation";
  $pageSection = "docs";
  include_once("../includes/header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <ul>
        <li><b>Authors</b></li>
        <li style="margin-left: 16px;">Name: Sean Kozer</li>
        <li style="margin-left: 16px;">Student ID: 24201596</li>
        <li style="margin-left: 16px;">Date of Submission: 06/10/2017</li>
        <br />

        <li  style="margin-left: 16px;">Name: Hui Yee Tan</li>
        <li  style="margin-left: 16px;">Student ID: 26372452</li>
        <li  style="margin-left: 16px;">Date of Submission: 06/10/2017</li>
        <br />

        <li><b>Username and Password for the MySQL database account used</b></li>
        <li style="margin-left: 16px;">Username: s24201596</li>
        <li style="margin-left: 16px;">Password: monash00</li>
        <br/>

        <li><b>Database schema (i.e. create table statement)</b></li>
        <li style="margin-left: 16px;"><a href="../schema/famox.sql">famox.sql</a></li>
        <br />

        <li><b>Database snapshot (i.e. records in the database in CSV format)</b></li>
        <li style="margin-left: 16px;"><a href="../schema/database_data.zip">database_data.zip</a></li>
        <br />

        <li><b>Team member work allocation</b></li>
        <li style="margin-left: 16px;"><a href="../schema/task_assign.txt">task_assign.txt</a></li>
      </ul>
    </div>
  </div>
</div>

<?php
  include_once("../includes/footer.php");
?>
