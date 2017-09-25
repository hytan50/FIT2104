<?php
  $image_dir = opendir(SITE_ROOT."/product_images/");
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form method="post" action="delete.php">
        <button class="btn btn-danger btn-round pull-right" type="submit">
          <i class="material-icons">add</i>Delete Images
          <div class="ripple-container"></div>
        </button>
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
                <th>Delete</th>
              </thead>
              <tbody>
                <?php
                  while($filename = readdir($image_dir)){
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
                    <td>
                      <input type="checkbox" name="check[]" value="<?php echo $filename ?>">
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
        <button class="btn btn-danger btn-round pull-right" type="submit">
          <i class="material-icons">add</i>Delete Images
          <div class="ripple-container"></div>
        </button>
      </form>
    </div>
  </div>
</div>
