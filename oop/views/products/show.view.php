<?php require 'views/partials/header.php';?>

<main class="container mt-4">
    <h1>products </h1>
    <div class="row mt-4">

        <?php


        foreach ($products as $product) : ?>
        <div class="col-4">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['price']; ?></h6>
                    <p class="card-text"><?php echo $product['description']; ?></p>
                    <form action="/products/delete/<?php echo $product['id']; ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                  <a href="/products/update/<?php echo $product['id']; ?>" class="btn btn-warning">Update</a>


                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


</main>

<?php require 'views/partials/footer.php'; ?>
