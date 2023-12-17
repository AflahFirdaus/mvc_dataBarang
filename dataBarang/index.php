<?php
require_once 'controllers/ItemController.php';

// Database connection
$db = new mysqli('localhost', 'root', '', 'db_mvc_barang');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// ItemController instance
$itemController = new ItemController($db);

// Handle CRUD operations
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $itemController->addItem($name, $description, $price);
}

if (isset($_POST['update'])) {
    $id = $_POST['update_id'];
    $name = $_POST['update_name'];
    $description = $_POST['update_description'];
    $price = $_POST['update_price'];
    $itemController->updateItem($id, $name, $description, $price);
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete_id'];
    $itemController->deleteItem($id);
}

// Fetch all items
$items = $itemController->getAllItems();

// Load the view
include 'views/template.php';

// Close the database connection
$db->close();
?>