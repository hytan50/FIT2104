<?php
require_once("../config.php");
if (isset($_POST["action"]) && $_POST["action"] == "add") {
  foreach($_FILES["images"]["tmp_name"] as $key=>$tmp_name){
      $temp = $_FILES["images"]["tmp_name"][$key];
      $name = $_FILES["images"]["name"][$key];

      if(empty($temp))
      {
          break;
      }

      move_uploaded_file($temp, SITE_ROOT."/product_images/".$name);
  }
}
?>
<html>
<head>
  <script type="text/javascript">
    function validateForm() {
      var costPrice = document.getElementById("cost_price").value;
      var salePrice = document.getElementById("sale_price").value;
      if (isNaN(costPrice) || isNaN(salePrice)) {
        alert("Cost price and sale price must be valid numbers.");
        return false;
      } else if (costPrice > salePrice) {
        alert("Sale price must be higher than cost price.");
        return false;
      }
    }
  </script>
</head>
<body>
<h1>Create New Product</h1>
<form method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm();">
  <table align="center" cellpadding="3">
    <tr>
      <td><b>Product Name</b></td>
      <td><input type="text" name="name" size="30" required></td>
    </tr>
    <tr>
      <td><b>Cost Price</b></td>
      <td><input type="text" name="cost_price" id="cost_price" size="30" required></td>
    </tr>
    <tr>
      <td><b>Sale Price</b></td>
      <td><input type="text" name="sale_price" id="sale_price" size="30" required></td>
    </tr>
    <tr>
      <td><b>Country of Origin</b></td>
      <td><input type="text" name="country_of_origin" size="40"></td>
    </tr>
    <tr>
      <td><b>Images</b></td>
      <td><input type="file" name="images[]" multiple="multiple" /></td>
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
  <input type="hidden" name="action" value="add" />
</form>
</body>
</html>
