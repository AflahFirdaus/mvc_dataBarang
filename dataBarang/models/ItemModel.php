<?php
class ItemModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllItems() {
        $query = "SELECT * FROM items";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getItemById($id) {
        $query = "SELECT * FROM items WHERE id = $id";
        $result = $this->db->query($query);
        return $result->fetch_assoc();
    }

    public function addItem($name, $description, $price) {
        $name = $this->db->real_escape_string($name);
        $description = $this->db->real_escape_string($description);
        $query = "INSERT INTO items (name, description, price) VALUES ('$name', '$description', $price)";
        return $this->db->query($query);
    }

    public function updateItem($id, $name, $description, $price) {
        $name = $this->db->real_escape_string($name);
        $description = $this->db->real_escape_string($description);
        $query = "UPDATE items SET name='$name', description='$description', price=$price WHERE id=$id";
        return $this->db->query($query);
    }

    public function deleteItem($id) {
        $query = "DELETE FROM items WHERE id=$id";
        return $this->db->query($query);
    }
}
?>
