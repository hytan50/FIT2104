<?php
  include("../connection.php");
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
  $query = "SELECT * FROM client";
  $result = $conn->query($query);
?>

<table>
  <tr>
    <th>Client ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Action</th>
  </tr>

<?php
  while ($row = $result->fetch_array()) {
?>
  <tr>
    <td><?php echo $row["client_id"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><a href="edit.php?id=<?php echo $row["client_id"]; ?>">Edit</a></td>
  </tr>
<?php
  }
?>
</table>

<?php
  $result->free();
  $conn->close();
?>
