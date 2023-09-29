<!-- product section -->
<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Whether you're looking for a fresh fruit platter for your next party or a healthy snack for your kids, we have the perfect fruit for you!</p>
                    </div>
				</div>
			</div>

            <div class="row">

                <?php foreach ($products as $product):?>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="<?= $product['image']?>" alt=""></a>
                            </div>
                            <h3><?= $product['name']?></h3>
                            <p class="product-price">₱<?= $product['price']?></p>
                            <p> <?= $product['description']?></p>
                            <p> <?= $product['category']?></p>
                            <p> <?= $product['quantity']?> kilos</p>
                            
                            <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
               
    </div>
</div>
        

		
	<!-- end product section -->