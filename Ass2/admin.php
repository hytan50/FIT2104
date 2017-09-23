<?php
  require_once("config.php");
  require_once("functions.php");

  // Handle login and logout attempts
  switch($_GET["action"]) {
    case "logout":
      $logout_success = logout();
      if ($logout_success) {
        // Redirect back to login page.
        header("Location: admin.php");
      }
      break;

    case "login":
      if ($_SESSION["username"]) {
        header("Location: " . ADMIN_HOMEPAGE);
        break;
      }

      if (!isset($_POST["username"]) && !isset($_POST["password"])) {
        // Exit early and show login form if no details are submitted.
        break;
      }

      // Try log in with username and password.
      $login_success = authenticate($_POST["username"], $_POST["password"]);
      if ($login_success) {

        // Login success! Redirect to the admin.
        $redirect_uri = $_SESSION["destinationURL"] ?? ADMIN_HOMEPAGE;
        unset($_SESSION['destinationURL']);  // no longer required
        header("Location: " . $redirect_uri);
        break;

      } else {
        // TODO: Better formatting.
        $error_message = "Invalid username or password.";
      }

      break;
  }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Login - Famox</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!--  Material Dashboard CSS    -->
  <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

  <!--  Famox custom CSS     -->
  <link href="assets/css/famox.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="custom-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
          <h2 class="text-center">Famox Admin</h2>
          <form method="post" action="?action=login">
            <div class="card card-login">
              <div class="card-header text-center" data-background-color="orange">
                <h4 class="card-title">Login</h4>
              </div>

              <div class="card-content">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">account_circle</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Username</label>
                    <input type="text" name="username" class="form-control" autocomplete="off" style="cursor: auto;">
                  </div>
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="footer text-center">
                <?php if(isset($error_message)) {
                  echo "<p class=\"text-danger\">".$error_message."</p>";
                } ?>

                <button type="submit" class="btn btn-warning btn-simple btn-wd btn-lg">Let's go</button>
              </div>
            </div>
          </form>

          <p style="margin-left: 100px;">
            <b>Username:</b> harry<br>
            <b>Password:</b> demo123
          </p>

        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container-fluid">
      <p class="pull-left">
        <a
          class="btn btn-info btn-round"
          href="show_source.php?filename=<?php echo str_replace("/24201596", "", str_replace("/Ass2/", "", $_SERVER["SCRIPT_NAME"])); ?>"
          target="_blank"
        >
          <i class="material-icons">code</i> Show Source
        </a>
      </p>
      <p class="copyright pull-right">
        &copy; <script>document.write(new Date().getFullYear())</script> Team T25
      </p>
    </div>
  </footer>
  </div>
  </div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>

<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>

<!-- Material Dashboard custom methods -->
<script src="assets/js/famox.js"></script>

</html>
