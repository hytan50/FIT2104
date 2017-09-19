<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" data-background-color="green">
          <h4 class="title">Add Project</h4>
          <p class="category">Create a new Famox project</p>
        </div>
        <div class="card-content">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating">
                  <label class="control-label">Description</label>
                  <input type="text" name="description" class="form-control" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Country</label>
                  <input type="text" name="country" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">City</label>
                  <input type="text" name="city" class="form-control" required>
                </div>
              </div>
            </div>

            <input type="hidden" name="action" value="add" />
            <button type="submit" class="btn btn-success pull-right">Add Project</button>
            <a href="list.php" class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
