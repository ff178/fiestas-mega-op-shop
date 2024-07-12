<?php include MODULE."header.php"; ?>

<body>

<?php include MODULE."nav.php"; ?>
<!--Header-->

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
				<li class="active">Login</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Login</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Inicia sesion para ingresar a tu perfil y realizar compras.</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form class="loginCon"  action="#" method="post">
				  <input name="username" type="text" placeholder="Usuario" required=" " >
					<input name="pass" type="password" placeholder="Contraseña" required=" " >
					<div class="forgot">
						<a href="#">Olvidaste la contraseña?</a>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">Nuevos Usuarios</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.php">Registrate Aquí</a> O regresa al <a href="index.php">Inicio<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>

  <script>
  $(".loginCon form").submit(function(e){
    e.preventDefault();

    var form = $(this)[0];
    var data = {}

    var rdy = false;

    var username = form.querySelector("[name=username]");
    var pass = form.querySelector("[name=pass]");


    if(pass.value !='' && username.value !=''){
          rdy = true;

    }



    if(rdy){
			data = processForm(form);
			console.log(data);
      $.ajax({
						url:"<?php print(URL);?>Users/enter/",
						method:"POST",
						data: data
					}).done(function(r){

						
							if(r.error == 0){
								window.location = "<?php print(URL);?>Index/index";
								location.reload();
							}else{
								alert("Username or Password incorrect");
							}


					});

		}


    return false;

  });

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
<!-- //login -->
<!-- footer -->
<?php include MODULE."footer.php"; ?>
<!-- //footer -->



</body>
</html>
