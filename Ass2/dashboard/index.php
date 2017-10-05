<?php
  require_once("../config.php");

  // Set context and include the header, content and footer.
  $pageTitle = "Dashboard";
  $pageSection = "dashboard";
  include_once("../includes/header.php");

  // Get number of products
  $query = "SELECT COUNT(*) FROM product";
  $result = $conn->query($query);
  list($num_products) = $result->fetch_row();

  // Get number of projects
  $query = "SELECT COUNT(*) FROM project";
  $result = $conn->query($query);
  list($num_projects) = $result->fetch_row();

  // Get number of clients
  $query = "SELECT COUNT(*) FROM client";
  $result = $conn->query($query);
  list($num_clients) = $result->fetch_row();
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <h4>Welcome <b><?php echo $_SESSION["username"]; ?></b>!</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">

      <!-- Products  -->
      <div class="card card-stats">
        <div class="card-header" data-background-color="green">
          <i class="material-icons">shopping_cart</i>
        </div>
        <div class="card-content">
          <p class="category">Products</p>
          <h3 class="title"><?php echo $num_products; ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <a href="../products/">View products</a>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-4">

      <!-- Projects  -->
      <div class="card card-stats">
        <div class="card-header" data-background-color="orange">
          <i class="material-icons">work</i>
        </div>
        <div class="card-content">
          <p class="category">Projects</p>
          <h3 class="title"><?php echo $num_projects; ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <a href="../projects/">View projects</a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-md-4">

      <!-- Clients  -->
      <div class="card card-stats">
        <div class="card-header" data-background-color="blue">
          <i class="material-icons">person</i>
        </div>
        <div class="card-content">
          <p class="category">Clients</p>
          <h3 class="title"><?php echo $num_clients; ?></h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <a href="../clients/">View clients</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
  include_once("../includes/footer.php");
?>
