<?php include MODULE."header.php"; ?>

<body>
<!--Header-->
<?php include MODULE."nav.php"; ?>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
				<li class="active">Registro Usuario</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Registrate Aquí</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Registrate para realizar compras en nuestra tienda, recibir descuentos y las mejores ofertas.</p>
			<div class="login-form-grids">

				<div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">

				</div>
				<h6 class="animated wow slideInUp" data-wow-delay=".5s">Login información</h6>

					<form class="regisCon animated wow slideInUp" data-wow-delay=".5s" action="#" method="post">
						<input name="username" type="text" placeholder="Usuario" required=" " >
						<input name="name" type="text" placeholder="Nombre" required=" " >
						<input name="email" type="email" placeholder="Email" required=" " >
						<input name="pass" type="password" placeholder="Contraseña" required=" " >
						<input name="pass2" type="password" placeholder="Confirma la Contraseña" required=" " >


						<input type="submit" value="Register">
					</form>

			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.php">Inicio</a>
			</div>
		</div>
	</div>

	<script>
	$(".regisCon form").submit(function(e){
		e.preventDefault();

		var form = $(this)[0];
		var data = {}
		var rdy = false;
		var rdySend = false;
		/*var data = processForm(form);
		console.log(data);*/

		var pass = form.querySelector("[name=pass]").value;
		var pass2 = form.querySelector("[name=pass2]").value;
		var username = form.querySelector("[name=username]".value);
		var email = form.querySelector("[name=email]").value;

		console.debug(pass);
		console.debug(pass2);

		if(username !=''){
			rdy = validateUnique(username,"Users","verificarUsername","username");
		}
		if(email !=''){
			rdy = validateUnique(email,"Users","verificarCorreo","email");
		}

		if(pass.value !='' && pass2.value !=''){
			if(pass.value == pass2.value){
					rdy = true;
			}
		}else{
				rdy = false;
			alert("las contraseñas no son iguales");
		}

		if(rdy){
			data = processForm(form);
			console.log(data);
			$.ajax({
						url:"<?php print(URL);?>Users/singUp",
						method:"POST",
						data: data
					}).done(function(r){

							if(r.error == 0){
								alert("Te haz registrado, gratz!");

								location.reload();
							}else{
								alert("Paila!");
							}


					});
		}

		return false;

	});

	function validateUnique(who,controller,method,name){

		if(who.value != ''){
			$.ajax({
				url:"<?php print(URL); ?>"+controller+"/"+method+"/"+who.value,
				method:"GET"
			}).done(function(r){
				if(r != 0){
					$(who).removeClass("correcto").addClass("incorrecto");
					rdySend = false;
					errorMsg = name+" existente en la base de datos";
				}else{
					$(who).removeClass("incorrecto").addClass("correcto");
					rdySend = true;
				}
			});
		}
		return rdy;

	}

	function processForm(form){
		var inputs = form.querySelectorAll("input");
		var data = {};
		$(inputs).each(function(){
			var input = $(this);
			if(input.context.type != "submit"){
				var attr = input.context.name;
				data[attr] = input.context.value;
			}
		});
		return data;
	}
	</script>
<!-- //register -->
<!-- footer -->
<?php include MODULE."footer.php"; ?>
<!-- //footer -->
</body>
</html>
