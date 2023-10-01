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
                            
                            <a href="/products/{{ $product['id'] }}" class="cart-btn" data-bs-toggle="modal" data-bs-target="#productModal"><i class="fa-regular fa-eye"></i>View</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </div>
</div>
        

		
<!-- JavaScript -->
<script>
$(document).ready(function() {
  $('#productModal').on('show.bs.modal', function() {
    // Get the ID of the product that was clicked on
    var productId = $(this).attr('data-product-id');

    // Make an AJAX request to get the product details
    $.ajax({
      url: '/products/' + productId,
      method: 'GET',
      success: function(data) {
        // Set the modal body content
        $('#productModal .modal-body').html(data);
      }
    });
  });
});
</script>
	<!-- end product section -->