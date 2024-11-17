
<?php require 'views/partials/header.php'; ?>
<div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>
    <form action="/products/create" method="POST">
        <div class="form-group mt-2">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
        </div>
        <div class="form-group mt-2">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter product price" required>
        </div>
        <div class="form-group mt-2">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Add Product</button>
    </form>
</div>
<?php require 'views/partials/footer.php'; ?>

