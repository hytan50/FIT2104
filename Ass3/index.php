<?php
    require_once("includes/Search.php");
    require_once("controller.php");
    
    $search_name = (!isset($_GET["search_name"]) || empty($_GET["search_name"])) ? null : $_GET["search_name"];
    $search_category = (!isset($_GET["search_category"]) || empty($_GET["search_category"]) )  ? null : $_GET["search_category"];
    $max_salePrice = (!isset($_GET["max_salePrice"]) || empty($_GET["max_salePrice"]))  ? null : $_GET["max_salePrice"];

    $controller = new Controller();
    $result = $controller->searchProduct($search_name, $search_category, $max_salePrice);
    $category = $controller->getCategory();
    ?>
    <div>
        <form action="" method="GET">
            <label>Search By Name : </label>
            <input type="text" name="search_name" class="form-control" maxlength="30"
                   value="<?php echo isset($_GET["search_name"])? $_GET["search_name"] : null ?>" required>
            <label> &nbsp &nbsp &nbsp &nbsp Search By Category : </label>
            <!--<input type="text" name="search_category" class="form-control" maxlength="30"
                   value="<?php echo isset($_GET["search_category"])? $_GET["search_category"] : null ?>" >-->
            <select name="search_category">
                <option value="null" disabled>--select--</option>
                <?php foreach ($category as $row){?>
                <option value="<?php echo $row?>"><?php echo $row; ?></option>
                    <?php }?>
            </select>
            <label> &nbsp &nbsp &nbsp &nbsp Max Sale Price : $</label>
            <input type="text" name="max_salePrice" class="form-control" maxlength="30"
                   value="<?php echo isset($_GET["max_salePrice"])? $_GET["max_salePrice"] : null ?>" required>
            <label>&nbsp &nbsp &nbsp &nbsp</label>
            <button type="submit"> Search </button>
        </form>
    </div>
    <div>
        <table border="1">
            <thead>
                <th>Product Name</th>
                <th>Price</th>
            </thead>
            <tbody>
            <?php foreach ($result as $productResult){?>
                <tr>
                    <td><?php echo $productResult[0]; ?></td>
                    <td><?php echo $productResult[1]; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

