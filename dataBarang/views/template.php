<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style.css">
    <title>Item Management</title>
</head>
<body>
    <figure class="text-center">
    <blockquote class="blockquote">
        <h2>Item Management</h2>
    </blockquote>
    </figure>

    <!-- Display items -->
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item) : ?>
            <tr>
                <th scope="row"><?php echo $item['id']; ?></th>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['description']; ?></td>
                <td><?php echo $item['price']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


    <!-- Add new item form -->
    <figure class="text-center">
        <h2>Add New Item</h2>
    </figure>
    <form action="index.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Input Nama" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Input Deskripsi" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" step="0.01" placeholder="Input Harga" required>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-secondary" type="submit" name="add">Add Item</button> 
    </div>
    </form>

    <!-- Update item form -->
    <figure class="text-center">
        <h2>Update Item</h2>
    </figure>
    <form action="index.php" method="post">
    <div class="mb-3">
        <label for="update_id" class="form-label">Item Id</label>
        <input type="number" class="form-control" name="update_id" placeholder="Input Id" required>
    </div>
    <div class="mb-3">
        <label for="update_name" class="form-label">Name</label>
        <input type="text" class="form-control" name="update_name" placeholder="Input Nama" required>
    </div>
    <div class="mb-3">
        <label for="update_description" class="form-label">Description</label>
        <input type="text" class="form-control" name="update_description" placeholder="Input Deskripsi" required>
    </div>
    <div class="mb-3">
        <label for="update_price" class="form-label">Price</label>
        <input type="number" class="form-control" name="update_price" step="0.01" placeholder="Input Harga" required>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-secondary" type="submit" name="update">Update Item</button> 
    </div>
    </form>

    <!-- Delete item form -->
    <figure class="text-center">
        <h2>Delete Item</h2>
    </figure>
    <form action="index.php" method="post">
    <div class="mb-3">
        <label for="delete_id" class="form-label">Item Id</label>
        <input type="number" class="form-control" name="delete_id" placeholder="Input Id" required>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn1 btn-secondary" type="submit" name="delete">Delete Item</button> 
    </div>
    </form>
</body>
</html>
