<?php include MODULE."header.php"; ?>

<body>
<!--Header-->
<?php include MODULE."nav.php"; ?>

<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Tendencia Disfraces 2016</h3>
				<!--<h4>Up to <span>50% <i>Off/-</i></span></h4>-->
				<div class="wmuSlider example1">

					<!--Pagination Slide-->
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Cambiar1</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Cambiar2</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Cambiar3</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="<?php print(URL); ?>public/js/jquery.wmuSlider.js"></script>
					<script>
						$('.example1').wmuSlider();
					</script>
			</div>
		</div>
	</div>


<!-- banner-bottom Fotos -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".3s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="<?php print(URL); ?>public/images/disfrazIndex1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>Encuentra tu <span>Disfraz</span><i> Aquí</i></h3>
								<div>
									<p><a href="<?php print(URL); ?>products">Comprar en Linea</a></p>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="<?php print(URL); ?>public/images/disfrazIndex2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-pos">
							<p>Alquila tu disfraz</p>
						</div>
					</div>
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="<?php print(URL); ?>public/images/decoracion1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p>¡Haz de tu fiesta la mejor!</p>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<!--Nuevos productos-->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Promociones</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Toda la tendencia 2016 la tenemos aquí con un super descuento</p>
			<div class="new-collections-grids">
				<!--Imagenes-->
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".4s">
						<div class="new-collections-grid1-image">
							<img src="<?php print(URL); ?>public/images/disfrazMujer4.jpg" alt=" " class="img-responsive" />

							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Ver Más</a>
							</div>

							<div class="new-collections-grid1-right">

							</div>
						</div>
						<h4><a href="single.html">Disfraz Mujer Maravilla</a></h4>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$100000</i> <span class="item_price">$50000</span><a class="item_add" href="#">Agregar al carro</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".4s">


						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image"><img src="<?php print(URL); ?>public/images/disfrazHombre1.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
								<a href="single.html">Ver Más</a>
							</div>
							<div class="new-collections-grid1-right new-collections-grid1-right-rate">
							</div>
							<div class="new-one">
								<p>New</p>
							</div>
						</div>
						<h4><a href="single.html">Disfraz Hombre en Llamas</a></h4>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$150000</i> <span class="item_price">$95000</span><a class="item_add" href="#">Agregar al Carro </a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".4s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image"><img src="<?php print(URL); ?>public/images/disfrazNino1.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Quick View</a>
							</div>
						</div>
						<h4><a href="single.html">Disfraz Niño Capitan America</a></h4>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>$110000</i> <span class="item_price">$70000</span><a class="item_add" href="#">Agregar al Carro </a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<!-- new-timer
	<div class="timer">
		<div class="container">
			<div class="timer-grids">
				<div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<h3><a href="products.html">sunt in culpa qui officia deserunt mollit</a></h3>
					<div class="rating">
						<div class="rating-left">
							<img src="../public/images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="../public/images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="../public/images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="../public/images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="../public/images/1.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
						<p><i>$580</i> <span class="item_price">$550</span></p>
						<h4>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
							qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
							dolorem eum fugiat quo voluptas nulla pariatur.</h4>
						<p><a class="item_add timer_add" href="#">add to cart </a></p>
					</div>
					<div id="counter"> </div>
					<script src="../public/js/jquery.countdown.js"></script>
					<script src="../public/js/script.js"></script>
				</div>
				<div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="timer-grid-right1">
						<img src="../public/images/17.jpg" alt=" " class="img-responsive" />
						<div class="timer-grid-right-pos">
							<h4>Special Offer</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
<!-- //new-timer -->
<!-- Descuento Img -->
<!--	<div class="collections-bottom">
		<div class="container">
			<div class="collections-bottom-grids">
				<div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".4s">
					<h2>¡Hoy!</h2><h3>45% Descuento para <span>Mujer y Niños</span></h3>
				</div>
			</div>
			<div class="newsletter animated wow slideInUp" data-wow-delay=".4s">
				<h3>Suscribete</h3>
				<p>Suscribete y recibe las mejores ofertas y nuevos productos.</p>
				<form>
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<input type="email" value="Ingresa tu correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
					<input type="submit" value="Enviar" >
				</form>
			</div>
		</div>
	</div> -->
<!-- //collections-bottom -->
<!-- footer -->
<?php include MODULE."footer.php"; ?>
<!-- //footer -->
</body>
</html>
