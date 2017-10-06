<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <a href="delete.php?id=<?php echo $client["id"]; ?>" class="confirm-delete">
        <button class="btn btn-danger btn-round">
					<i class="material-icons">close</i> Delete Client
					<div class="ripple-container"></div>
        </button>
      </a>
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">Edit Client #<?php echo $client["id"]; ?></h4>
          <p class="category">Update details for an existing client</p>
        </div>
        <div class="card-content">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">First Name</label>
                  <input type="text" name="first_name" class="form-control" value="<?php echo $client["first_name"]; ?>" maxlength="50" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Last Name</label>
                  <input type="text" name="last_name" class="form-control" value="<?php echo $client["last_name"]; ?>" maxlength="50" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
  							<div class="form-group label-floating">
  								<label class="control-label">Address</label>
  								<input type="text" name="address_street" class="form-control" value="<?php echo $client["address_street"]; ?>" maxlength="100">
  							</div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
    						<div class="form-group label-floating">
    							<label class="control-label">Suburb</label>
    							<input type="text" name="address_suburb" class="form-control" value="<?php echo $client["address_suburb"]; ?>" maxlength="50">
    						</div>
              </div>
              <div class="col-md-4">
    						<div class="form-group label-floating">
    							<label class="control-label">State</label>
    							<input type="text" name="address_state" class="form-control" value="<?php echo $client["address_state"]; ?>" maxlength="6">
    						</div>
              </div>
              <div class="col-md-4">
    						<div class="form-group label-floating">
    							<label class="control-label">Postcode</label>
    							<input type="text" name="address_postcode" class="form-control" value="<?php echo $client["address_postcode"]; ?>" maxlength="4">
    						</div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $client["email"]; ?>" maxlength="50" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Phone</label>
                  <input type="tel" name="phone" class="form-control" value="<?php echo $client["phone"]; ?>" maxlength="12" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="checkbox">
                	<label>
                		<input type="checkbox" name="is_subscribed" value="1"
                    <?php echo (($client["is_subscribed"]) ? " checked" : "") ?>>
                		Subscribed to Mailing List?
                	</label>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $client["id"]; ?>" />
            <input type="hidden" name="action" value="update" />
            <button type="submit" class="btn btn-primary pull-right">Update Client</button>
            <a href="." class="btn pull-right">Back</a>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
