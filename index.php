<?php require_once 'includes/header.php'; ?>

		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="navbar">
		  <a class="navbar-brand home" href="#">
E-commerce</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto text-uppercase">
		      <li >
		        <a class="active" href="index.php">Home</a>
		      </li>
		      <li>
		        <a href="view_shop.php">Shop</a>
		      </li>
		      <?php if (!isset($_SESSION['customer_email'])): ?>
						<li><a href="checkout.php">My Account</a></li>
					<?php else: ?>
						<li><a href="customer/view_my_account.php?my_orders">My Account</a></li>
					<?php endif ?>
		      <li>
		        <a href="view_cart.php">Shopping Cart</a>
		      </li>
		      <li>
		        
		      </li>
		    </ul>
					<a href="view_cart.php" class="btn btn-success mr-2"><i class="fas fa-shopping-cart"></i><span> <?php echo $getFromU->count_product_by_ip($ip_add); ?> items in Cart</span></a>

		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="user_query" required="1">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
		    </form>
		  </div>
		</nav>


		

<!-- advantages ends -->


		<div id="hot">
			<div class="container-fluid mt-4 px-0">
				<div class="row">
					<div class="col-12">
						<h2 class="p-4 bg-light text-center text-uppercase">Latest this week</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="content">
			<div class="row">

				<?php
					$getProducts = $getFromU->selectLatestProduct();
					foreach ($getProducts as $getProduct) {
						$product_id = $getProduct->product_id;
						$product_title = $getProduct->product_title;
						$product_price = $getProduct->product_price;
						$product_img1 = $getProduct->product_img1;
				?>

				<div class="col-sm-6 col-md-4 col-lg-3 single">
					<div class="product mb-4">
						<div class="card">
						  <a href="view_details.php?product_id=<?php echo $product_id; ?>"><img class="card-img-top img-fluid p-4" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Card image cap"></a>
						  <div class="card-body text-center">
						    <h6 class="card-title"><a href="view_details.php?product_id=<?php echo $product_id; ?>"><?php echo $product_title; ?></a></h6>
						    <h5 class="card-text">Price : $<?php echo $product_price; ?></h5>
						    <div class="row">
									<div class="col-md-6  pr-1 pb-2">
										<a href="view_details.php?product_id=<?php echo $product_id; ?>" class="btn btn-outline-info form-control">Details</a>
									</div>
									<div class="col-md-6  pr-3">
										<a href="view_details.php?product_id=<?php echo $product_id; ?>" class="btn btn-success form-control"><i class="fas fa-shopping-cart"></i> Add</a>
									</div>
								</div>
						  </div>
						</div>
					</div>
				</div> <!-- SINGLE PRODUCT END -->

				<?php } ?>





			</div>
		</div>


		<?php require_once 'includes/footer.php'; ?>

