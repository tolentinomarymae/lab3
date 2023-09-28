<!-- product section -->
<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
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
                            <p class="product-price">$<?= $product['price']?></p>
                            <p> <?= $product['description']?></p>
                            <p> <?= $product['category']?></p>
                            <p> <?= $product['quantity']?></p>
                            
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/img/products/product-img-1.jpg" alt=""></a>
                            </div>
                            <h3>Strawberry</h3>
                            <p class="product-price">85$ </p>
                            <p> Decription</p>
                            <p> 2 kg</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/img/products/product-img-2.jpg" alt=""></a>
                            </div>
                            <h3>Berry</h3>
                            <p class="product-price">70$ </p>
                            <p> Decription</p>
                            <p> 2 kg</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/img/products/product-img-2.jpg" alt=""></a>
                            </div>
                            <h3>Berry</h3>
                            <p class="product-price">70$ </p>
                            <p> Decription</p>
                            <p> 2 kg</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/img/products/product-img-3.jpg" alt=""></a>
                            </div>
                            <h3>Lemon</h3>
                            <p class="product-price">35$ </p>
                            <p> Description </p>
                            <p> 2 kg</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

		</div>
	</div>
	<!-- end product section -->