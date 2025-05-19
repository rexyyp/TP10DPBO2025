<?php
require_once 'model/Products.php';
require_once 'model/Categories.php';

class ProductsViewModel {
    private $products;
    private $categories;

    public function __construct() {
        $this->products = new Products();
        $this->categories = new Categories();
    }

    public function getProductsList() {
        return $this->products->getAll();
    }

    public function getCategories() {
        return $this->categories->getAll();
    }

    public function getProductById($id) {
        return $this->products->getById($id);
    }

    public function addProduct($name, $price, $categories_id) {
        return $this->products->create($name, $price, $categories_id);
    }

    public function updateProduct($id, $name, $price, $categories_id) {
        return $this->products->update($id, $name, $price, $categories_id);
    }

    public function deleteProduct($id) {
        return $this->products->delete($id);
    }
  }
?>