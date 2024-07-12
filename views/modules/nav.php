	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<!--Contacto-->
					<ul>
				

						<?php if(Session::get("username")){

							echo "Hola, ".Session::get("username");
							echo "<div id='userMenu'><li data-option='logout'><i class='glyphicon glyphicon-log-in' aria-hidden='true'></i><input class='salir' name='salir' type='submit' value='salir'></li></div>";
								}else{	?>
									<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="<?php print(URL);?>Users/singIn">Login</a></li>
									<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="<?php print(URL);?>Users/singUp">Registrate</a></li>
						<?php } ?>
					</ul>
				</div>
				<!--Contacto Redes-->
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="https://www.facebook.com/" class="facebook"></a></li>
						<li><a href="https://www.instagram.com/" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="<?php print(URL); ?>"><img src="<?php print(URL); ?>public/images/logo-mega-op.png" alt=" " class="img-responsive" /></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Menu Hamburguesa -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php print(URL); ?>" class="act">Inicio</a></li>
							<!-- Mega Menu -->
							<li><a href="<?php print(URL); ?>products">Disfraces</a></li>
							<li><a href="<?php print(URL); ?>rentals">Alquiler</a></li>
							<li><a href="<?php print(URL); ?>services">Servicios</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="<?php print(URL); ?>public/js/classie.js"></script>
						<script src="<?php print(URL); ?>public/js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!--Carrito-->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="<?php print(URL); ?>Users/car">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="<?php print(URL); ?>public/images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Carro de Compras</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<script>

		$("#userMenu li").click(function(){
			var opt = $(this).data("option");

			switch(opt){
				case "logout":
					$.ajax({
						url: "<?php print(URL); ?>Users/salir/",
						method: "GET"
					}).done(function(){
						location.reload();
					});
				break;
			}
		});

	</script>

<!-- //header -->
