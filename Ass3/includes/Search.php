<?php
    class Search_DAO{

        private $_host;
        private $_username;
        private $_password;
        private $_database;
        private $_port;
        private $_conn;
        private $_connerr;

        function __construct(){
            $this->setParams();
            $this->connDB();
        }

        function setParams(){
            $this->_host = "130.194.7.82";
            $this->_username = "s26372452";
            $this->_password = "monash00";
            $this->_database = "s26372452";
            $this->_port = 3306;
        }

        function getConnErr(){
            return $this->_connerr;
        }

        function checkConn(){
            if ($this->_connerr){
                return false;
            }
            else{
                return true;
            }
        }

        function connDB(){
            error_reporting(E_ERROR);
            $this->_conn =  new mysqli($this->_host, $this->_username, $this->_password, $this->_database, $this->_port);
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

            if ($this->_conn->connect_errno){
                $this->_connerr =$this->_conn->connect_error;
            }
        }

        function searchProduct($name, $category, $max_saleprice){
            //if $name is null, if $category is null and $max_saleprice is null, have different sql code
            //global $conn;
            $query = "";
            //if $category is null, then no need to access category table and product_category table
            if ($category != null){
                $query.="SELECT p.name, p.sale_price FROM product_category pc 
                   INNER JOIN category c ON pc.category_id = c.id
                   INNER JOIN product p ON pc.product_id = p.id 
                    WHERE LOWER(c.name) LIKE CONCAT('%', LOWER(?), '%')";

                if ($name != null){
                    $query.= " AND LOWER(p.name) LIKE CONCAT('%', LOWER(?), '%') ";
                }

                if ($max_saleprice != null){
                    $query.= " AND p.sale_price <= ?";
                }

                $pquery = $this->_conn->prepare($query);

                if ($name != null && $max_saleprice != null){
                    $pquery->bind_param("ssd", $category, $name, $max_saleprice);
                }
                else if ($name != null){
                    //only max_saleprice is null
                    $pquery->bind_param("ss", $category, $name);
                }
                else if ($max_saleprice != null){
                    //only name is null
                    $pquery->bind_param("sd", $category, $max_saleprice);
                }
                else{
                    //name and max_saleprice are both null
                    $pquery->bind_param("s", $category);
                }


            }
            else{
                if (empty($name) && empty($max_saleprice)){
                    $query = "SELECT * FROM product WHERE 1";
                    $result = $this->_conn->query($query);
                    return $result;
                }

                $query.="SELECT * FROM product WHERE ";
                if ($name != null){
                    $query.= "LOWER(name) LIKE CONCAT('%', LOWER(?), '%') ";

                    if ($max_saleprice != null){
                        $query.= " AND sale_price <= ?";
                    }

                }
                else if ($max_saleprice != null){
                    $query.= "sale_price <= ?";
                }

                $pquery = $this->_conn->prepare($query);

                if ($name != null && $max_saleprice != null){
                    //only category is null,
                    $pquery->bind_param("sd", $name, $max_saleprice);
                }
                else if ($name != null){
                    //both category and max_saleprice are null
                    $pquery->bind_param("s", $name);
                }
                else{
                    //both category and name are null
                    $pquery->bind_param("d", $max_saleprice);
                }
            }
            $pquery->execute();
            $result = $pquery->get_result();
            return $result;
        }

        function getAllCategory(){
            $query = "SELECT * FROM category";
            $result = $this->_conn->query($query);
            return $result;

        }
    }