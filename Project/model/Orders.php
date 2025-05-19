<?php
require_once 'config/Database.php';

class Orders {
    private $conn;
    private $table = 'orders';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT orders.*, products.name AS products_name 
                  FROM " . $this->table . " 
                  JOIN products ON orders.product_id = products.id 
                  ORDER BY orders.order_date DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($product_id, $quantity) {
        $query = "INSERT INTO " . $this->table . " (product_id, quantity) 
                  VALUES (:product_id, :quantity)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':product_id', (int)$product_id, PDO::PARAM_INT);
        $stmt->bindValue(':quantity', (int)$quantity, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function update($id, $product_id, $quantity) {
        $query = "UPDATE " . $this->table . " 
                  SET product_id = :product_id, quantity = :quantity 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':product_id', (int)$product_id, PDO::PARAM_INT);
        $stmt->bindValue(':quantity', (int)$quantity, PDO::PARAM_INT);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
