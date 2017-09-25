<?php
  include_once("../config.php");
  include_once("../functions.php");
  include_once("includes/functions.php");
  $pageTitle = "Product Images";
  $pageSection = "images";
  include_once("../includes/header.php");

  $filepath = "../product_images";
  $dir = opendir($filepath);
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form method="post" action="delete.php">
        <div class="card">
          <div class="card-header" data-background-color="orange">
            <h4 class="title">Images</h4>
            <p class="category">List of product images.</p>
          </div>
          <div class="card-content table-responsive">
            <table class="table">
              <thead class="text-warning">
                <th>Thumbnail</th>
                <th>Image Name</th>
                <th>Product</th>
                <th>Checked</th>
              </thead>
              <tbody>
                <?php
                  while($filename = readdir($dir)){
                    if ($filename == "." || $filename == ".."){
                      // TODO: Validate file extensions too.
                      continue;
                    }
                    $image_record = getProductDescription($filename);
                ?>
                  <tr>
                    <td><img src="../product_images/<?php echo $filename; ?>" class="img-thumbnail img-list"></td>
                    <td><?php echo $filename; ?></td>
                    <td>
                      <?php
                        if ($image_record) {
                          echo "<a href=\"../products/edit.php?id=".$image_record["product_id"]."\">".$image_record["product_name"]."</a>";
                        } else {
                          echo "-";
                        }
                      ?>
                    </td>
                    <td align="center">
                      <input type="checkbox" name="check[]" value="<?php echo $filename ?>">
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
        <!--
        <a href="delete.php">
          <button class="btn btn-success btn-round">
            <i class="material-icons">add</i> Delete images
            <div class="ripple-container"></div>
          </button>
        </a>
        -->
        <input name="delete" type="submit" value="Delete">
      </form>
    </div>
  </div>
</div>

<?php
  $conn->close();
  include_once("../includes/footer.php");
?>
