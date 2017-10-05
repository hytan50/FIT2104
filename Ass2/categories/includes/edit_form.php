<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <a href="delete.php?id=<?php echo $category["id"]; ?>" class="confirm-delete">
        <button class="btn btn-danger btn-round">
					<i class="material-icons">close</i> Delete Category
					<div class="ripple-container"></div>
        </button>
      </a>
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">Edit Category #<?php echo $category["id"]; ?></h4>
          <p class="category">Update details for an existing product category</p>
        </div>
        <div class="card-content">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating">
                  <label class="control-label">Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $category["name"]; ?>" required>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $category["id"]; ?>" />
            <input type="hidden" name="action" value="update" />
            <button type="submit" class="btn btn-primary pull-right">Update Category</button>
            <a href="." class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
