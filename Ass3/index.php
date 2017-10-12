<?php
    require_once("config.php");
    require_once("functions.php");
    require_once("includes/Search.php");
    
    $search_name = (!isset($_GET["search_name"]) || empty($_GET["search_name"])) ? null : $_GET["search_name"];
    $search_category = (!isset($_GET["search_category"]) || empty($_GET["search_category"]) )  ? null : $_GET["search_category"];
    $max_salePrice = (!isset($_GET["max_salePrice"]) || empty($_GET["max_salePrice"]))  ? null : $_GET["max_salePrice"];

    $search = new Search();
    $result = $search->searchProduct($search_name, $search_category, $max_salePrice);

    $category = getCategory();
    ?>
    <div>
        <form action="" method="GET">
            <label>Search By Name : </label>
            <input type="text" name="search_name" class="form-control" maxlength="30"
                   value="<?php echo isset($_GET["search_name"])? $_GET["search_name"] : null ?>">
            <label> &nbsp &nbsp &nbsp &nbsp Search By Category : </label>
            <!--<input type="text" name="search_category" class="form-control" maxlength="30" required>-->
            <select name="search_category">
                <option value="none">None</option>
                <?php while ($row = $category->fetch_assoc()){?>
                <option value="<?php echo $row["name"]?>"><?php echo $row["name"]; ?></option>
                    <?php }?>
            </select>
            <label> &nbsp &nbsp &nbsp &nbsp Max Sale Price : $</label>
            <input type="text" name="max_salePrice" class="form-control" maxlength="30"
                   value="<?php echo isset($_GET["max_salePrice"])? $_GET["max_salePrice"] : null ?>">
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
            <?php while ($productResult = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $productResult["name"]; ?></td>
                    <td><?php echo $productResult["sale_price"]; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

