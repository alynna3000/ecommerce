<div class="col-md-3">
    <div class="card">
        <a href="<?php echo BASE_URL; ?>/views/products/product.php?id=<?php echo $product["id"]; ?>">
        <img src="<?php echo BASE_URL. $product["image_url"]; ?>" class="card-img-top" alt="Product 1">
        </a>
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo $product["product_name"]?></h5>
                <p class="card-text"><?php echo $product["unit_price"]?></p>
                <a href="#" class="btn btn-success">Add to Cart</a>
            </div>
    </div>
</div>