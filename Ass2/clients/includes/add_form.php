<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" data-background-color="green">
          <h4 class="title">Add Client</h4>
          <p class="category">Manually add a client to the database</p>
        </div>
        <div class="card-content">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">First Name</label>
                  <input type="text" name="first_name" class="form-control" maxlength="50" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Last Name</label>
                  <input type="text" name="last_name" class="form-control" maxlength="50" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
  							<div class="form-group label-floating">
  								<label class="control-label">Address</label>
  								<input type="text" name="address_street" class="form-control" maxlength="100">
  							</div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
    						<div class="form-group label-floating">
    							<label class="control-label">Suburb</label>
    							<input type="text" name="address_suburb" class="form-control" maxlength="50">
    						</div>
              </div>
              <div class="col-md-4">
    						<div class="form-group label-floating">
    							<label class="control-label">State</label>
    							<input type="text" name="address_state" class="form-control" maxlength="6">
    						</div>
              </div>
              <div class="col-md-4">
    						<div class="form-group label-floating">
    							<label class="control-label">Postcode</label>
    							<input type="text" name="address_postcode" class="form-control" maxlength="4">
    						</div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Email</label>
                  <input type="email" name="email" class="form-control" maxlength="50" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Phone</label>
                  <input type="tel" name="phone" class="form-control" maxlength="12" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="checkbox">
                	<label>
                		<input type="checkbox" name="is_subscribed" value="1">
                		Subscribed to Mailing List?
                	</label>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" />
            <input type="hidden" name="action" value="add" />
            <button type="submit" class="btn btn-success pull-right">Add Client</button>
            <a href="." class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
