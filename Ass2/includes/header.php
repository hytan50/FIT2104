<?php
	require_once("../functions.php");
	auth_redirect();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $pageTitle; ?> - Famox</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  Famox custom CSS     -->
    <link href="../assets/css/famox.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-1.jpg">
			<div class="logo">
				<a href="#" class="simple-text">Famox</a>
			</div>

  		<div class="sidebar-wrapper">
				<ul class="nav">
          <li <?php echo (($pageSection == "dashboard") ? "class=\"active\"" : "") ?>>
            <a href="../dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li <?php echo (($pageSection == "clients") ? "class=\"active\"" : "") ?>>
            <a href="../clients/">
              <i class="material-icons">person</i>
              <p>Clients</p>
            </a>
          </li>
          <li <?php echo (($pageSection == "products") ? "class=\"active\"" : "") ?>>
            <a href="../products/">
              <i class="material-icons">shopping_cart</i>
              <p>Products</p>
            </a>
          </li>
					<li <?php echo (($pageSection == "product_prices") ? "class=\"active\"" : "") ?>>
            <a href="../product_prices/">
              <i class="material-icons">attach_money</i>
              <p>Product Prices</p>
            </a>
          </li>
          <li <?php echo (($pageSection == "categories") ? "class=\"active\"" : "") ?>>
            <a href="../categories/">
              <i class="material-icons">label</i>
              <p>Categories</p>
            </a>
          </li>
					<li <?php echo (($pageSection == "images") ? "class=\"active\"" : "") ?>>
            <a href="../images/">
              <i class="material-icons">photo_library</i>
              <p>Images</p>
            </a>
          </li>
					<li <?php echo (($pageSection == "projects") ? "class=\"active\"" : "") ?>>
            <a href="../projects/">
              <i class="material-icons">work</i>
              <p>Projects</p>
            </a>
          </li>
        </ul>
  		</div>
		</div>

    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><?php echo $pageTitle ?></a>
					</div>
					<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
							<li>
								<a href="../admin.php?action=logout">
 							  	<i class="material-icons">exit_to_app</i> Logout
		 						</a>
							</li>
						</ul>
          </div>
				</div>
			</nav>

      <div class="content">
