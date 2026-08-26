<?php

require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/Product.php';

class ProductController
{
    public function displayProducts()
    {
        $database = new Database();
        $db = $database->connect();

        $product = new Product($db);

        $products = $product->getProducts();

        require __DIR__ . '/../view/display_products.php';
    }
}
?>