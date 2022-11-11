<?php
require_once("../do-an-web-php/Models/ProductModel.php");

class ProductController
{
    public $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function invoke()
    {
        if (!isset($_GET["productid"])) {
            $products = $this->model->getProductList();
            include "../do-an-web-php/Views/productlist.php";
        } else {
            $product = $this->model->getProduct($_GET["productid"]);
            include "../do-an-web-php/Views/viewproduct.php";
        }
    }
    public function invokeAdmin()
    {
        if (!isset($_GET["productid"])) {
            $products = $this->model->getProductList();
            include "../do-an-web-php/Views/admin/product.php";
        } else {
            $product = $this->model->getProduct($_GET["productid"]);
            include "../do-an-web-php/Views/admin/update-product.php";
        }
    }
    public function create()
    {
        if (isset($_POST['submit'])) {
            $result = $this->model->createProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['image'], $_POST['category']);
            if ($result) {
                header("Location:" . URL . "/Views/admin/product.php");
            } else {
                header("Location:" . URL . "/Views/home.php");
            }
        } else {
            include '../do-an-web-php/Views/admin/create-product.php';
        }
    }
    public function update($id)
    {
        $data['getProductById'] = $this->model->getProduct($id);
        if (isset($_POST['submit'])) {
            $result = $this->model->updateProduct($id, $_POST['name'], $_POST['description'], $_POST['price'], $_POST['image'], $_POST['category']);
            if ($result) {
                header("Location:" . URL . "/Views/admin/product.php");
            } else {
                header("Location:" . URL . "/Views/home.php");
            }
        } else {
            include '../do-an-web-php/Views/admin/update-product.php';
        }
    }
    public function delete($id)
    {
        $result = $this->model->deleteProduct($id);
        if ($result) {
            echo "<div>success</div>";
            header("Location:" . URL . "/Views/admin/product.php");
        } else {
            echo "<div>error</div>";
            header("Location:" . URL . "/Views/home.php");
        }
    }
}
