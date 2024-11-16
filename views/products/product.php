
<!-- edit.php code but i dun have it yet -->
<?php 
include(ROOT_DIR."app/config/DatabaseConnection.php");
$db = new DatabaseConnection();
$conn=$db->connectDB();

$product=[];
$id= @$_GET['id'];
$category=["1" => "electronics", "2" => "fashion", "3" => ""];
?>

    <!-- Navbar -->
   <?php require_once(ROOT_DIR."/includes/navbar.php"); ?>

    <!-- Product Details -->
    <div class="container my-5 bg-bpod">
        <div class="container mt-5">

            <div class="row">
                <!-- Product Image -->
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500" alt="Product Image" class="img-fluid" style="height:500px" border border-warning >
                </div>

                <!-- Product Information -->
                 
                <div class="col-md-6">
                    
                        <h2><?php echo $product["product_name"]?></h2>
                        <div class="mb-3"><span class="badge text-bg-info"><?php echo $product["category_id"]?></span></div>
                        <p class="lead text-warning fw-bold"><?php echo $product["unit_price"]?></p>
                        <p>Product Description</p>

                        <!-- Quantity Selection -->
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrement-btn">-</button>
                                <input type="number" id="quantity" name="quantity" class="form-control text-center" value="1" min="1" max="10" style="max-width: 60px;">
                                <button class="btn btn-outline-secondary" type="button" id="increment-btn">+</button>
                                <span class="input-group-text">/ Remaining Stocks: 10</span>
                            </div>
                        </div>

                        <!-- Add to Cart Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
                        </div>
                    
                </div>
                
            </div>
        </div>

        <!-- Related Products (Optional) -->
        <div class="container my-5">
            <h3>Related Products</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Related Product 1</h5>
                            <p class="card-text">$30.00</p>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Related Product 2</h5>
                            <p class="card-text">$40.00</p>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Related Product 3</h5>
                            <p class="card-text">$35.00</p>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Related Product 4</h5>
                            <p class="card-text">$45.00</p>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

    </div> 
    
<script>
    document.getElementById('decrement-btn').addEventListener('click', function() {
        let quantityInput = document.getElementById('quantity');
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) { // Ensures quantity doesn't go below 1
            quantityInput.value = currentValue - 1;
        }
    });

    document.getElementById('increment-btn').addEventListener('click', function() {
        let quantityInput = document.getElementById('quantity');
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
</script>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 MyShop. All rights reserved.</p>
    <nav>
        <a href="#" class="text-white">Privacy Policy</a> | 
        <a href="#" class="text-white">Terms & Conditions</a>
    </nav>
</footer>

   
<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
