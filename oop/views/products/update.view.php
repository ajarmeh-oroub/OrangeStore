<?php require 'views/partials/header.php'; ?>

<h2>Update Product</h2>

<?php if (isset($product)) : ?>
    <form action="/products/update/<?php echo htmlspecialchars($product['id']); ?>" method="POST" class="container">
        <div class="form-group mt-2">
            <label for="name">Product Name</label>
            <input type="text" id="name" name="name" class="form-control"
                   value="<?php echo htmlspecialchars($product['name']); ?>" required>
        </div>

        <div class="form-group mt-2">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" class="form-control"
                   value="<?php echo htmlspecialchars($product['price']); ?>" required>
        </div>

        <div class="form-group mt-2">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" required>
            <?php echo htmlspecialchars($product['description']); ?>
        </textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Update Product</button>
    </form>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>

<?php require 'views/partials/footer.php'; ?>
