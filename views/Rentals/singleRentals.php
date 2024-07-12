<?php include MODULE."header.php"; ?>

<body>

<?php include MODULE."nav.php"; ?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php print(URL);?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
				<li class="active">Servicio</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 products-left">

				<?php include MODULE."categorys.php"; ?>


			</div>

			<div class="content-top1 col-md-8 single-right">



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
		url:"<?php print(URL);?>Rentals/singleRental/<?php echo $params; ?>",
		type: "GET"
		}).done(function(r){
			r.map(function(n){
				$(".content-top1").append(
					'<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">  <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s"><div class="new-collections-grid1-image"><img src="<?php print(URL);?>'+n.pic+'" alt=" " class="img-responsive" data-imagezoom="true"></div></div></div><div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s"><h3>'+n.tittle+'</h3><h4><span class="item_price">Precio por dia: $'+n.priceDay+'</span></h4><div class="description"><h5><i>Descripcion</i></h5><p>'+n.descrip+'</p></div></div>');
				console.log(n);

				});
		});

</script>

<?php include MODULE."footer.php"; ?>
</body>
</html>
