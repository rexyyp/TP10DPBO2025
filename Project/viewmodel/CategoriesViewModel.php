<?php
require_once 'model/Categories.php';

class CategoriesViewModel {
    private $categories;

    public function __construct() {
        $this->categories = new Categories();
    }

    public function getCategoriesList() {
        return $this->categories->getAll();
    }

    public function getCategoryById($id) {
        return $this->categories->getById($id);
    }

    public function addCategory($name) {
        return $this->categories->create($name);
    }

    public function updateCategory($id, $name) {
        return $this->categories->update($id, $name);
    }

    public function deleteCategory($id) {
        return $this->categories->delete($id);
    }
}
?>