<?php
include_once("../config.php");
include_once("../functions.php");
include_once("includes/functions.php");
$currentURL = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
if (auth($currentURL)) {

    $pageTitle = "Product Images";
    $pageSection = "Product Images";
    include_once("../includes/header.php");

    $filepath = "../schema/images";     //subject to change to "product_image" folder
    $files = array_diff(scandir($filepath), array('.', '..'));
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="add.php">
                    <button class="btn btn-success btn-round">
                        <i class="material-icons">add</i> Delete images
                        <div class="ripple-container"></div>
                    </button>
                </a>
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
                            foreach ($files as $file) {
                                $index++;
                                $image = getProductDescription($file);
                                ?>
                                <tr>
                                    <td><?php echo $index; ?></td>      <!-- id should be based on database? I don't think so-->
                                    <td><?php echo $file; ?></td>
                                    <td>
                                        <?php
                                        if ($image){
                                            echo $image["product_id"];
                                        }
                                        else{
                                            echo "-";
                                        }?>
                                    </td>
                                    <td align="center"><input type="checkbox" name="check[]" value="<?php  $index ?>"></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $result->free();
    $conn->close();
    include_once("../includes/footer.php");
    ?>


    <?php

}
?>