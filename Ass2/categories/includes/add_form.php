<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" data-background-color="green">
          <h4 class="title">Add Category</h4>
          <p class="category">Create a new product category</p>
        </div>
        <div class="card-content">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group label-floating">
                  <label class="control-label">Name</label>
                  <input type="text" name="name" class="form-control" maxlength="45" required>
                </div>
              </div>
            </div>

            <input type="hidden" name="action" value="add" />
            <button type="submit" class="btn btn-success pull-right">Add Category</button>
            <a href="." class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
