<div class="container-fluid">
  <div class="row">
    <div class="col-md-10">
      <a href="delete.php?id=<?php echo $product["id"]; ?>" class="confirm-delete">
        <button class="btn btn-danger btn-round">
					<i class="material-icons">close</i> Delete Product
					<div class="ripple-container"></div>
        </button>
      </a>
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">Edit Product #<?php echo $product["id"]; ?></h4>
          <p class="category">Update details for an existing product</p>
        </div>
        <div class="card-content">
          <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating">
                  <label class="control-label">Product Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $product["name"]; ?>" maxlength="30" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating">
                  <label class="control-label">Country of Origin</label>
                  <input type="text" name="country_of_origin" class="form-control" value="<?php echo $product["country_of_origin"]; ?>" maxlength="40" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Cost Price</label>
                  <input
                    id="cost_price"
                    type="number"
                    name="cost_price"
                    class="form-control"
                    value="<?php echo $product["cost_price"]; ?>"
                    step="0.01"
                    required
                  >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Sale Price</label>
                  <input
                    id="sale_price"
                    type="number"
                    name="sale_price"
                    class="form-control"
                    value="<?php echo $product["sale_price"]; ?>"
                    step="0.01"
                    required
                  >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating is-empty is-fileinput">
                  <input type="file" name="images[]" multiple="multiple">
                  <div class="input-group">
                    <input type="text" readonly="" class="form-control" placeholder="Upload Images">
                    <span class="input-group-btn input-group-sm">
                      <button type="button" class="btn btn-fab btn-fab-mini">
                        <i class="material-icons">attach_file</i>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <?php if ($product_images->num_rows > 0) { ?>
              <table class="table">
                <thead class="text-primary">
                  <th>Image</th>
                  <th>Delete</th>
                </thead>
                <tbody>
                <?php while ($row = $product_images->fetch_array()) { ?>
                  <tr>
                    <td>
                      <img src="../product_images/<?php echo $row["name"] ?>" class="img-thumbnail">
                    </td>
                    <td>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="delete_image[]" value="<?php echo $row["id"] ?>">
                        </label>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            <?php } ?>

            <table class="table">
              <thead class="text-primary">
                <th>Category</th>
                <th></th>
              </thead>
              <tbody>
              <?php while ($row = $product_categories->fetch_array()) { ?>
                <tr>
                  <td>
                    <?php echo $row["name"] ?>
                  </td>
                  <td>
                    <div class="checkbox">
                      <label>
                        <input
                          type="checkbox"
                          name="category[]"
                          value="<?php echo $row["id"] ?>"
                          <?php echo (($row["checked"] == 1) ? " checked" : "") ?>
                        >
                      </label>
                    </div>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>

            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="id" value="<?php echo $product["id"]; ?>" />
            <button type="submit" class="btn btn-primary pull-right">Update Product</button>
            <a href="." class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
