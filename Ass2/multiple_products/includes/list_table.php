<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <?php
          foreach ($messages as $message) {
            echo $message;
          }
        ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form method="post" action="">
        <button class="btn btn-primary btn-round pull-right">
          <i class="material-icons">refresh</i> Update Checked
          <div class="ripple-container"></div>
        </button>
        <div class="card">
          <div class="card-header" data-background-color="orange">
            <h4 class="title">Product Prices</h4>
            <p class="category">Bulk update product prices.</p>
          </div>
          <div class="card-content table-responsive">
            <table class="table">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Cost Price</th>
                <th>Sale Price</th>
                <th>Checked</th>
              </thead>
              <tbody>
              <?php while ($row = $result->fetch_array()) { ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["name"]; ?></td>
                  <td>$<?php echo $row["cost_price"]; ?></td>
                  <td>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <div class="form-group">
                        <input type="number"
                          name="<?php echo $row["id"]; ?>"
                          value="<?php echo $row["sale_price"]; ?>"
                          class="form-control"
                          min="<?php echo $row["cost_price"]; ?>"
                          step="0.01"
                        >
                        <span class="material-input"></span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <input type="checkbox" name="check[]" value="<?php echo $row["id"]; ?>">
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <button class="btn btn-primary btn-round pull-right">
          <i class="material-icons">refresh</i> Update Checked
          <div class="ripple-container"></div>
        </button>
      </form>
    </div>
  </div>
</div>
