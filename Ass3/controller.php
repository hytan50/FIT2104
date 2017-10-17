<?php
    require_once("includes/Search.php");

    class Controller{

        private $_search;

        function __construct(){
            $this->_search = new Search_DAO();
        }
        function searchProduct($product_name, $category, $maxPrice){
            $result = $this->_search->searchProduct($product_name, $category, $maxPrice);
            $resultArray = array();
            while ($productResult = $result->fetch_assoc()){
                array_push($resultArray, array($productResult["name"], $productResult["sale_price"]));
            }
            return $resultArray;
        }

        function getCategory(){
            $result = $this->_search->getAllCategory();
            $resultArray = array();
            while ($categoryResult = $result->fetch_assoc()){
                array_push($resultArray, $categoryResult["name"]);
            }
            return $resultArray;
        }
    }