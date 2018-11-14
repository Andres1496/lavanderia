<!DOCTYPE html>
<html>
	<head>
		<title>SmartWash</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/ionicons.min.css"> -->
		<link rel="icon" type="image/png" href="/favicon.png" />
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
	    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="js/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" href="js/nivo-lightbox/nivo-lightbox-theme.css">
	    <link rel="stylesheet" href="css/custom.css">
	    


	    <!-- js -->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/owl.carousel.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.actual.min.js"></script>
 		<script src="js/datepicker/js/bootstrap-datepicker.js"></script>
	
	

	</head>

	<body data-spy="scroll" data-target="#navbar-example">

		<!-- ****************************** Preloader ************************** -->
		<div id="preloader"></div>


		<div id="wrapper">
			<div id="overlay-1">
				<section id="navigation-scroll">
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example">
					        <span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-ba3rs"></i>
					      </button>
					      <a class="navbar-brand" href="/">SmartWash</a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="navbar-example">

					     @include('layouts.nav-bar-proveedor')

					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->
				

				<section id="starting">
					<div class="text-left  starting-text ">
					<form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" 
					action="{{ url('/proveedor') }}">
					{!! csrf_field() !!} <!-- token para no ser post de 3ros maliciosos -->

		              <div class="row">
		                <div class="col-md-4 col-md-offset-1">
		                  <div class="form-group">

		                    <input class="form-control" name="nombre" type="text" placeholder="Nombre de su empresa" required="required" data-validation-required-message="Obligatorio" >
		                    <p class="help-block text-danger"></p>
		                  </div>

		                  <div class="form-group">
		                    <input class="form-control" name="tipo" type="text" placeholder="Tipo de empresa" required="required" data-validation-required-message="Obligatorio">
		                    <p class="help-block text-danger"></p>
		                  </div>

		                  <div class="form-group">
		                    <input class="form-control" name="tipo_productos" type="text" placeholder="Tipo de productos ofrece su empresa" required="required" data-validation-required-message="Obligatorio">
		                    <p class="help-block text-danger"></p>
		                  </div>

		                  <div class="form-group">
		                    <input class="form-control" name="direccion" type="text" placeholder="Direccion de su empresa" required="required" data-validation-required-message="Obligatorio">
		                    <p class="help-block text-danger"></p>
		                  </div>

		                  <div class="form-group">
		                    <input class="form-control" name="nombreRepresentante" type="text" placeholder="Nombre de la persona representate de su empresa" required="required" data-validation-required-message="Obligatorio">
		                    <p class="help-block text-danger"></p>
		                  </div>

		                  <div class="form-group">
		                    <input class="form-control" name="email" type="email" placeholder="Email" required="required" data-validation-required-message="Obligatorio">
		                    <p class="help-block text-danger"></p>
		                  </div>

		                  <div class="form-group">
		                    <input class="form-control" name="telefono" type="tel" placeholder="Telefono" required="required" data-validation-required-message="Obligatorio">
		                    <p class="help-block text-danger"></p>
		                  </div>
		                </div>

		                <div class="col-md-4 col-md-offset-1">
		                  <div class="form-group">
		                    <textarea style="overflow::auto;resize:none" cols="2" rows="7" class="form-control" name="mensaje" placeholder="Por que desea ser nuestro proveedor (Máx 100 Caract)" required="required" data-validation-required-message="Obligatorio" maxlength="100"></textarea>
		                    <p class="help-block text-danger"></p>
		                  </div>
		                </div>

		                <div class="clearfix"></div>
		                <div class="col-lg-12 text-center">
		                  <div id="success"></div>
		                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" onclick="registro()">Enviar</button>
               		 </div>
            		</div>
          		  </form>	
				</div>
			</section>

				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
			</div><!-- overlay-1 -->
		</div>	<!-- wrapper -->		

		<!-- footer -->
		<section id="footer" class="main-footer">
			<div class="col-md-8">
				<div class="card">
					<div class="card-container">
						<font size="2">	<b>&copy; Instituto Politénico Nacional </br>  Escuela Superior de Cómputo</font>
					</div>
				</div>
			</div>	

			<div class="col-md-4">
				<div class="card">
					<div class="card-container">
						<font size="2">Horario: Lun - Vié 10:00 - 17:00 Hrs</font>
					</div>
				</div>
			</div>	
		 </section><!-- footer -->

		<!-- js animacion-->
		<script>
 			new WOW().init();
		</script>
		<script>
			$( function() {
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup =$( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>

		<script type="text/javascript">
			function registro(){
				alert("Gracias por tu interés. Nosotros te contactarémos :) ");
			}
		</script>


</script>

        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="js/script.js"></script>
       
	</body>
</html>
