<?php
  require_once("../config.php");

  // Get a list of projects
  $query = "SELECT * FROM project";
  $result = $conn->query($query);

  // Set context and include the header
  $pageTitle = "Projects";
  $pageSection = "projects";
  include_once("../includes/header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <a href="add.php">
        <button class="btn btn-success btn-round">
					<i class="material-icons">add</i> Add Project
					<div class="ripple-container"></div>
        </button>
      </a>
      <div class="card">
        <div class="card-header" data-background-color="orange">
          <h4 class="title">Projects</h4>
          <p class="category">List of projects.</p>
        </div>
        <div class="card-content table-responsive">
          <table class="table">
            <thead class="text-warning">
              <th>ID</th>
              <th>Name</th>
              <th>Country</th>
              <th>City</th>
              <th>Actions</th>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_array()) { ?>
              <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["country"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $row["id"]; ?>">
										<button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit">
											<i class="material-icons">edit</i>
										</button>
                  </a>
                  <a href="delete.php?id=<?php echo $row["id"]; ?>">
										<button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Delete">
											<i class="material-icons">close</i>
										</button>
                  </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
  $result->free();
  $conn->close();
  include_once("../includes/footer.php");
?>
