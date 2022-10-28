<?php
    require_once("./Models/ProductModel.php");

    class ProductController
    {
        public $model;

        public function __construct()
        {
            $this->model = new ProductModel();
        }

        public function invoke()
        {
            if(!isset($_GET["productid"]))
            {
                $products = $this->model->getProductList();
                include "Views/productlist.php";
            }
            else 
            {
                $product = $this->model->getProduct($_GET["productid"]);
                include "Views/viewproduct.php";
            }
        }
        public function getForCategory($category)
        {
            $products = $this->model->getForCategory($category);
            include "Views/productlist.php";
        }
    }
?>