<?php
require_once 'model/Orders.php';
require_once 'model/Products.php';

class OrdersViewModel {
    private $orders;
    private $products;

    public function __construct() {
        $this->orders = new Orders();
        $this->products = new Products();
    }

    public function getOrdersList() {
      return $this->orders->getAll();
    }

    public function getProducts() {
      return $this->products->getAll();
    }

    public function getOrderById($id) {
      return $this->orders->getById($id);
    }

    public function addOrder($product_id, $quantity) {
      return $this->orders->create($product_id, $quantity);
    }

    public function updateOrder($id, $product_id, $quantity) {
      return $this->orders->update($id, $product_id, $quantity);
    }

    public function deleteOrder($id) {
      return $this->orders->delete($id);
    }
}
?>