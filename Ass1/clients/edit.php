<?php
  include("../connection.php");
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
  $query = "SELECT * FROM client WHERE client_id = ?";

  $pquery = $conn->prepare($query);
  $pquery->bind_param("i", $client_id);
  $client_id = $_GET['id'];
  $pquery->execute();
  $result = $pquery->get_result();
  $row = $result->fetch_assoc();
?>

<h1>Update Client Details</h1>
<form method="post" action="">
  <table align="center" cellpadding="3">
    <tr>
      <td><b>Client ID</b></td>
      <td><?php echo $row["client_id"]; ?></td>
    </tr>
    <tr>
      <td><b>First Name</b></td>
      <td><input type="text" name="first_name" size="30" value="<?php echo $row["first_name"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Last Name</b></td>
      <td><input type="text" name="last_name" size="30" value="<?php echo $row["last_name"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Street</b></td>
      <td><input type="text" name="address_street" size="30" value="<?php echo $row["address_street"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Suburb</b></td>
      <td><input type="text" name="address_suburb" size="30" value="<?php echo $row["address_suburb"]; ?>"></td>
    </tr>
    <tr>
      <td><b>State</b></td>
      <td><input type="text" name="address_state" size="30" value="<?php echo $row["address_state"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Postcode</b></td>
      <td><input type="text" name="address_postcode" size="30" value="<?php echo $row["address_postcode"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Email</b></td>
      <td><input type="text" name="email" size="30" value="<?php echo $row["email"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Phone</b></td>
      <td><input type="text" name="phone" size="30" value="<?php echo $row["phone"]; ?>"></td>
    </tr>
    <tr>
      <td><b>Mailing List</b></td>
      <td>
        <input type="checkbox" name="is_subscribed"
          value="<?php echo $row["is_subscribed"]; ?>"
          <?php if ($row["is_subscribed"]) {
            echo " checked";
          } ?>
        >
      </td>
    </tr>

    <tr>
      <td>
        &nbsp;
      </td>
      <td>
        <button type="submit">Submit</button>
        <a href="list.php">Cancel</a>
      </td>
    </tr>
  </table>

</form>
