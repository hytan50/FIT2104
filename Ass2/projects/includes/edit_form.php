<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $project["id"]; ?>" />
        <input type="hidden" name="action" value="delete" />
        <button class="btn btn-danger btn-round">
					<i class="material-icons">close</i> Delete Project
					<div class="ripple-container"></div>
        </button>
      </form>
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">Edit Project #<?php echo $project["id"]; ?></h4>
          <p class="category">Update details for an existing project</p>
        </div>
        <div class="card-content">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating">
                  <label class="control-label">Description</label>
                  <input type="text" name="description" class="form-control" value="<?php echo $project["description"]; ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Country</label>
                  <input type="text" name="country" class="form-control" value="<?php echo $project["country"]; ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">City</label>
                  <input type="text" name="city" class="form-control" value="<?php echo $project["city"]; ?>" required>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $project["id"]; ?>" />
            <input type="hidden" name="action" value="update" />
            <button type="submit" class="btn btn-primary pull-right">Update Project</button>
            <a href="." class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
