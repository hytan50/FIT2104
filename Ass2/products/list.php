<?php
  require_once("../config.php");

  $query = "SELECT * FROM product";
  $result = $conn->query($query);
?>

<table>
  <tr>
    <th>Product ID</th>
    <th>Name</th>
    <th>Cost Price</th>
    <th>Sale Price</th>
    <th>Country of Origin</th>
    <th>Action</th>
  </tr>

<?php
  while ($row = $result->fetch_array()) {
?>
  <tr>
    <td><?php echo $row["product_id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td>$<?php echo $row["cost_price"]; ?></td>
    <td>$<?php echo $row["sale_price"]; ?></td>
    <td><?php echo $row["country_of_origin"]; ?></td>
    <td><a href="edit.php?id=<?php echo $row["product_id"]; ?>">Edit</a></td>
  </tr>
<?php
  }
?>
</table>

<?php
  $result->free();
  $conn->close();
?>
