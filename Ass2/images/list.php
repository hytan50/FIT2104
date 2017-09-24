<?php
    include_once("../config.php");
    include_once("../functions.php");
    include_once("includes/functions.php");
    $pageTitle = "Product Images";
    $pageSection = "Product Images";
    include_once("../includes/header.php");

    $filepath = "../schema/images";     //subject to change to "product_image" folder
    $dir = opendir($filepath);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="delete.php">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Images</h4>
                            <p class="category">List of product images.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                <th>ID</th>
                                <th>Images name</th>
                                <th>Used in product with product id</th>
                                <th>Checked</th>
                                </thead>
                                <tbody>
                                <?php
                                $index = 0;
                                while($file = readdir($dir)){
                                    if ($file == "." || $file == ".."){
                                        continue;
                                    }
                                    $index++;
                                    $image = getProductDescription($file);
                                    ?>
                                    <tr>
                                        <td><?php echo $index; ?></td>
                                        <td><?php echo $file; ?></td>
                                        <td>
                                            <?php
                                            if ($image) {
                                                echo $image["product_id"];
                                            } else {
                                                echo "-";
                                            } ?>
                                        </td>
                                        <td align="center"><input type="checkbox" name="check[]"
                                                                  value="<?php echo $file ?>"></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--
                <a href="delete.php">
                    <button class="btn btn-success btn-round">
                        <i class="material-icons">add</i> Delete images
                        <div class="ripple-container"></div>
                    </button>
                </a>
                -->
                    <input name="delete" type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
<?php
    $conn->close();
    include_once("../includes/footer.php");
?>