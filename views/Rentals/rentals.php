<?php include MODULE."header.php"; ?>

<body>

<?php include MODULE."nav.php"; ?>
<!-- //header -->
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php print(URL);?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
				<li class="active">Alquileres de disfraz</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
				</div>
			<?php include MODULE."categorys.php"; ?>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><img src="<?php print(URL);?>public/images/descuento1.jpg" alt=" " class="img-responsive" /></a>
					<div class="men-position-pos">
						<h4>Promociones</h4>
						<h5><span>45%</span> Disfraz Mujer y Niño </h5>
					</div>
				</div>
			</div>


			<div class="col-md-8 products-right">
				<div class="products-right-grid">

					<div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
						<img src="<?php print(URL);?>public/images/bannerProductos3.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>2016 Nuevas Tendencias</h4>
							<p>Tendencias en fiestas 2016. Fiestas Mega Op. </p>
						</div>
					</div>
				</div>
				<div class="content-top1 products-right-grids-bottom">



					<div class="clearfix"> </div>
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<script>
		$.ajax({
			url:"<?php print(URL);?>Rentals/allRentals",
			type: "GET"
			}).done(function(r){
				r.map(function(n){
					$(".content-top1").append(
						'<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s"><div class="new-collections-grid1-image"><a href="<?php print(URL);?>Rentals/single/'+n.idRental+'" class="product-image"><img src="'+n.pic+'" alt=" " class="img-responsive"></a><div class="new-collections-grid1-image-pos products-right-grids-pos"><a href="single.php">Ver</a><div class="new-collections-grid1-right products-right-grids-pos-right"></div></div><h4><a href="single.html">'+n.tittle+'</a></h4><div class="simpleCart_shelfItem products-right-grid1-add-cart"><p><span class="item_price">$'+n.priceDay+'</span><a class="item_add" href="#">Agregar al Carro. </a></p></div></div>');

				});
			});

	</script>
<!-- //breadcrumbs -->
<!-- footer -->
	<?php include MODULE."footer.php"; ?>
<!-- //footer -->
</body>
</html>
