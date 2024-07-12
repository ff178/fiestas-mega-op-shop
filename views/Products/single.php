<?php include MODULE."header.php"; ?>

<body>

<?php include MODULE."nav.php"; ?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php print(URL);?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
				<li class="active">Producto</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 products-left">

				<?php include MODULE."categorys.php"; ?>

				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><img src="<?php print(URL);?>public/images/descuento1.jpg" alt=" " class="img-responsive" /></a>
					<div class="men-position-pos">
						<h4>Promociones</h4>
						<h5><span>45%</span> Disfraz Mujer y Niño </h5>
					</div>
				</div>
			</div>

			<div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="thumb-image"> <img src="<?php print(URL);?>public/images/disfrazHombre1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li>
								 <div class="thumb-image"> <img src="<?php print(URL);?>public/images/disfrazHombre2.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li>
							   <div class="thumb-image"> <img src="<?php print(URL);?>public/images/disfrazHombre3.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="<?php print(URL);?>public/js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="<?php print(URL);?>public/css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="content-top1">

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->

<!-- zooming-effect -->
	<script src="<?php print(URL);?>public/js/imagezoom.js"></script>
<!-- //zooming-effect -->

<?php
	$url = $_GET["url"];
	$url = explode("/", $url);
	$params = ( isset($url[2]) && $url[2] != null ) ? $url[2] : null;
?>

<script>
	$.ajax({
		url:"<?php print(URL);?>Products/singleProduct/<?php echo $params; ?>",
		type: "GET"
		}).done(function(r){
			r.map(function(n){
				$(".content-top1").append(
					'<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s"><div class="clearfix"> </div><h3>'+n.tittle+'</h3><h4><span class="item_price">$'+n.price+'</span></h4><div class="description"><h5><i>Descripcion</i></h5><p>'+n.descrip+'</p><div class="occasion-cart"><a class="item_add" href="#">Agregar al Carro </a></div></div></div>');
				console.log(n);

				});
		});

</script>

<?php include MODULE."footer.php"; ?>
</body>
</html>
