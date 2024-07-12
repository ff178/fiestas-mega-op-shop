<?php include MODULE."header.php"; ?>

<body>

<?php include MODULE."nav.php"; ?>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
				<li class="active">Productos</li>
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
						<img src="<?php print(URL);?>public/images/bannerProductos1.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>2016 Nuevas Tendencias</h4>
							<p>Tendencias en fiestas 2016. Fiestas Mega Op. </p>
						</div>
					</div>
				</div>
				<div class="content-top1 products-right-grids-bottom ">

				</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<script>
	$.ajax({
		url:"<?php print(URL);?>Products/allProducts",
		type: "GET"
		}).done(function(r){
				r.map(function(n){
					$(".content-top1").append(
					    '<div class="col-md-4 products-right-grids-bottom-grid"><div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s"><div class="new-collections-grid1-image"><a href="<?php print(URL);?>Products/single/'+n.idProduct+'" class="product-image"><img src="" alt=" " id="'+n.idProduct+'" class="img-responsive"></a><div class="new-collections-grid1-image-pos products-right-grids-pos"><a href="single.php">Ver</a></div><div class="new-collections-grid1-right products-right-grids-pos-right"></div></div><h4><a href="single.html">'+n.tittle+'</a></h4><div class="simpleCart_shelfItem products-right-grid1-add-cart"><p><span class="item_price">'+n.price+'</span><a class="item_add" href="#">Agregar al Carro. </a></p></div></div></div>');

					        var link = call('Products','imagesAll',n.idProduct);

				});
			});


				function call(controller,method,value){

								if(value != ''){
									$.ajax({
										url:"<?php print(URL); ?>"+controller+"/"+method+"/"+value,
										method:"GET"
									}).done(function(r){
										$('#'+value+"").attr("src", r);

									});
								}

					}

</script>

<!-- //breadcrumbs -->
<!-- footer -->
<?php include MODULE."footer.php"; ?>
<!-- //footer -->
</body>
</html>
