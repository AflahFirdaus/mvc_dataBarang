<?php
require_once 'models/ItemModel.php';

class ItemController {
    private $model;

    public function __construct($db) {
        $this->model = new ItemModel($db);
    }

    public function getAllItems() {
        return $this->model->getAllItems();
    }

    public function getItemById($id) {
        return $this->model->getItemById($id);
    }

    public function addItem($name, $description, $price) {
        return $this->model->addItem($name, $description, $price);
    }

    public function updateItem($id, $name, $description, $price) {
        return $this->model->updateItem($id, $name, $description, $price);
    }

    public function deleteItem($id) {
        return $this->model->deleteItem($id);
    }
}
?>
