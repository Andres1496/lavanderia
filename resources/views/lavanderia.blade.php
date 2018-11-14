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
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    


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
					        <i class="fa fa-bars"></i>
					      </button>
					      <a class="navbar-brand" href="/">SmartWash</a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="navbar-example">

					     @include('layouts.nav-bar-inicio')

					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->
				

				<section id="starting">
					<div class="text-center starting-text wow animated zoomInDown">
						<h2>Bienvenido a tu servicio de Lavandería</h2>
						<h1 class="rene">Tu servicio inteligente</h1>
					</div>
				</section>

				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
			</div><!-- overlay-1 -->
		</div>	<!-- wrapper -->		
			
		<!-- About Us -->
		<section id="about">
			<div class="container">
				<div class="row text-center heading">
					<div class="wow animated zoomInDown heading-text">
						<h3>Acerca de nosotros</h3>
	                	<hr class="full">
	                	<br/>
					</div>
				</div>	<!-- row -->
				<div class="row about-us-text">
					<div class="col-md-12">
						<p class="text-center"> Somos un negocio fijo de lavandería que nació en el año 2014 con la intención de ofrecer un servicio económico, seguro y rápido hacía sus clientes. Somos un negocio particular que tiene como único objetivo el satisfacer las necesidades de sus clientes de una manera cómoda y sencilla.</p>
					</div>
				</div>	<!-- row -->
				<div class="row main_content">
					<div class="col-md-4 col-sm-4 wow animated zoomIn" data-wow-delay="0.1s" style="margin-bottom: 20px">
						<figure>
							<img class="img-responsive center-block" src="img/Ahorro.jpg" alt="image">
						</figure>
						<h5 class="text-center">Económico</h5>
					</div>	<!-- col-md-4 -->
					<div class="col-md-4 col-sm-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="img-responsive center-block" src="img/seguridad.jpg">
						</figure>
						<h5 class="text-center">Seguro</h5>
					</div>	<!-- col-md-4 -->
					<div class="col-md-4 col-sm-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="img-responsive center-block" src="img/rapidez.png">
						</figure>
						<h5 class="text-center">Rápido</h5>
					</div>	<!-- col-md-4 -->
				</div><!-- row main_content -->
			</div>	<!-- container -->
		</section>	<!-- about us -->

		<!-- Our service -->
		<section id="our_service">
			<div class="container">
				<div class="row text-center heading">
	        		<div class="wow animated zoomInDown heading-text">
	        			<h3>Servicios</h3>
	                	<hr class="full">
	                	<br/>
	        		</div>
		        </div>
			    <div class="main_content">
				    <div class="services">
			        	<div class="row">
			        		<div class="col-md-4 col-sm-6">
			        			<div class="service">
			        				<img src="img/lavadoBlancos.jpg" class="img-responsive" style="height: 250px">
			        				<div class="text-center">
				        				<h4>Lavado</h4>
				        				<p>
				        				Con la máxima calidad registrada en el mercado al utilizar los productos más modernos que tratan cada mancha sin dañar los textiles naturales y sintéticos.</br>
				        				 <b> ¡Cuidamos el medio ambiente!
				        				</p>	
			        				</div> <!-- .text-center -->
			        			</div> <!-- .service -->
			        		</div> <!-- .col-md-3 -->
			        		<div class="col-md-4 col-sm-6">
			        			<div class="service">
			        				<img src="img/ropaColor.jpg" class="img-responsive" style="height: 250px">
			        				<div class="text-center">
				        				<h4>Secado</h4>
				        				<p>
				        				Con nuestras secadoras más modernas, tus prendas estarán completamente secas y listas para el proceso de planchado.</br>
				        				<b>¡No te preocupes, tus prendas se mantendrán en perfectas condiciones!
				        				</p>	
			        				</div> <!-- .text-center -->
			        			</div> <!-- .service -->
			        		</div> <!-- .col-md-3 -->
			        		<div class="col-md-4 col-sm-6">
			        			<div class="service">
			        				<img src="img/edredon.jpg" class="img-responsive" style="height: 250px">
			        				<div class="text-center">
				        				<h4>Planchado</h4>
				        				<p>
				        				Años de experiencia y maquinaria de alta tecnología son utilizadas en el proceso de planchado de sus prendas, logrando una apariencia impecable.</br>
				        				<b>¡SUS PRENDAS LISTAS PARA USARSE! 
				        				</p>
			        				</div> <!-- .text-center -->
			        			</div> <!-- .service -->
			        		</div> <!-- .col-md-3 -->

			        		
			        	</div>	<!-- row -->
					</div>	<!-- services -->
				</div>	<!-- main_content -->
			</div>	<!-- container -->
		</section>	<!-- our_service -->

		<!-- Meet With Us -->
		<section id="Meet">
			<div class="container">
				<div class="row text-center heading">
	        		<div class="wow animated zoomInDown heading-text">
	        			<h3>Equipo de Trabajo</h3>
	                	<hr class="full">
	                	</div>	<!-- row -->
						<div class="row about-us-text">
							<div class="col-md-12">
								<p class="text-center">
			                		
			                	</p>
							</div>
						</div>	<!-- row -->
	        		</div> <!-- #heading-text -->
		        </div>
			    <div class="main_content">
				    <div class="container ">
			        	<div class="row col-md-8 col-md-offset-4">
			        		<div class="col-md-6 col-sm-6">
			        			<div class="meet-item">
			        				<img src="img/andres.png" alt="img-responsive" class="img-thumbnail" style="height:	280px">
			        				<div class="text-center">
				        				<h4>Andrés Bolaños</h4>
				        				<p>
				        					Developer
				        				</p>
				        				<a href="https://www.facebook.com/AndresMu96"><i class="fa fa-facebook-official" style="font-size: 30px"></i></a>
				        				<a href="https://www.instagram.com/__andres__bm/"><i class="fa fa-instagram" style="font-size: 30px"></i></a>
			        				</div> <!-- .text-center -->
			        			</div> <!-- .meet-item -->
			        		</div> <!-- .col-md-3 -->
					</div>	<!-- .container -->
				</div>	<!-- main_content -->
			<!--</div>	 container -->
		</section>	<!-- Meet -->
	

	    <!-- Cotizador  -->
		<section id="our_coti">
			<div class="container" >
				<div class="row text-center heading col-md-10 col-md-offset-1">
	        		<div class="wow animated zoomInDown heading-text">
	        			<h3>Cotiza Tu Servicio</h3>
	                	<hr class="full">
	                	<br/>
	        		</div>

	        			<div class="form-group col-md-3">
						    <label for="exampleFormControlSelect1">Ropa Blanca (KG) <sup>*</sup></label>
						    <select class="form-control" id="blancaKg" name="blanca">
							      <option value="0">0</option>
							      <option value="1">1</option>
							      <option value="2">2</option>
							      <option value="3">3</option>
							      <option value="4">4</option>
							      <option value="5">5</option>
							      <option value="6">6</option>
							      <option value="7">7</option>
							      <option value="8">8</option>
							      <option value="9">9</option>
							      <option value="10">10</option>

   						     </select></br>

							 <label for="exampleFormControlSelect1">Ropa de Color (KG) <sup>*</sup></label>
							 <select class="form-control" id="colorKg" name="color">
							      <option value="0">0</option>
							      <option value="1">1</option>
							      <option value="2">2</option>
							      <option value="3">3</option>
							      <option value="4">4</option>
							      <option value="5">5</option>
							      <option value="6">6</option>
							      <option value="7">7</option>
							      <option value="8">8</option>
							      <option value="9">9</option>
							      <option value="10">10</option>
    						</select> </br>

    						<label for="exampleFormControlSelect1">Cobertores y Edredones (Pieza)</label>
							 <select class="form-control" id="cobijasKg" name="cobija">
							      <option value="0">0</option>
							      <option value="1">1</option>
							      <option value="2">2</option>
							      <option value="3">3</option>
							      <option value="4">4</option>
							      <option value="5">5</option>
							      <option value="6">6</option>
							      <option value="7">7</option>
							      <option value="8">8</option>
							      <option value="9">9</option>
							      <option value="10">10</option>
    						</select> </br>

    						<button type="button" class="btn btn-primary" onclick="cotizar()">Cotizar</button>
  						</div> 

						<div class="col-sm-6">
							<label>Tu cotización es de: </label>
							<p>$<input type="text" id="resul" disabled=""></p>
							<label>Si deseas realizar tu reservación da clic     </label>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" onclick="pasaDatos()">Aquí</button>
						</div>

								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Nueva Reservación</h5>
								  	  </div>

								  	  <!-- FORMULARIO RESERVACION -->
								     <div class="modal-body">
							 			<form method="POST" id="formReservacion" action="{{url('/reserva')}}">
							 				{!! csrf_field() !!}

								        	<div class="form-group">
								            	<input type="text" class="form-control" name="nombre" autofocus="autofocus" placeholder="Nombre: " required="required" maxlength="50">
								          	</div>

								          <div class="form-group"></br>
								            <input type="text" class="form-control" name="dir" placeholder="Domicilio: " maxlength="100">
								          </div>

											<div class="form-group"></br>
												 <input type="text" onkeypress="return valida(event)" class="form-control" 
												 name="telefono" placeholder="Telefono: " required="required" maxlength="15">
									         </div>

									         <div class="input-group">
												  <span class="input-group-addon" id="basic-addon1">@</span>
												  <input type="email" name="email" class="form-control" placeholder="Email"required="required" maxlength="100" >
											</div>

											<div class="form-group">
												<label for="message-text" class="col-form-label">Ropa Blanca (KG) </label>
									            <input type="text" name="ropaBlanca" onkeypress="return valida(event)" class="form-control" id="RB" placeholder="Ropa Blanca (KG): "required="required" maxlength="4">
		    								</div>

		    								<div class="form-group">
									            <label for="message-text" class="col-form-label">Ropa Color (KG) </label>
										         <input type="text" name="ropaColor" onkeypress="return valida(event)" class="form-control" id="RC" placeholder="Ropa Color (KG): " required="required" maxlength="5">
		    								</div>

		    								<div class="form-group">
									            <label for="message-text" class="col-form-label">Cobertores y Cobijas (Pieza)
									             </label>
										         <input type="text" name="cobijaCobertor" onkeypress="return valida(event)" class="form-control" id="CC"placeholder="Cobertores y Cobijas (Pieza): " required="required" maxlength="5">
		    								</div>

									        <div class="form-group">
									            	<label for="message-text" class="col-form-label">Selecciona horario:
									            	 </label>
														<select class="form-control" name="horario" required="required">
													      <option value="10">10:00 am</option>
													      <option value="10_30">10:30 am</option>
													      <option value="11">11:00 am</option>
													      <option value="11_30">11:30 am</option>
													      <option value="12">12:00 pm</option>
													      <option value="12_30">12:30 pm</option>
													      <option value="13">13:00 pm</option>
													      <option value="13_30">13:30 pm</option>
													      <option value="14">14:00 pm</option>
													      <option value="14_30">14:30 pm</option>
													      <option value="15">15:00 pm</option>
													      <option value="15_30">15:30 pm</option>
				    									</select> 
									 		</div>

											<div class="form-group">
										         <label for="message-text" class="col-form-label">Selecciona Fecha: </label>
											     <input type="date" name="fecha" class="form-control" required="required">
		    								</div>
		    								<button type="submit" class="btn btn-primary">Enviar Solicitud</button>
	    								</form>
	    							</div>

								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								 	  </div>
								 </div>
								 </div>
								</div>

  						<div class="col-md-3">
							<div class="card">
								<div class="card-container">
										<h3>Precio de Servicio</h3>
										<dl>
											<dt>Ropa Blanca (Kg) </dt>
												<dd> $50.00 MXN </dd>
											<dt>Ropa de Color (Kg)</dt>
												<dd> $70.00 MXN </dd>
											<dt>Cobertores y Edredondes (Pieza)</dt>
												<dd>$60.00 MXN </dd>
										</dl>
								</div>
							</div>
						</div>
						<p align="right"><sub>* Incluye servicio de Lavado, Secado y Planchado</sub></p>
		       	 </div>
				</div>	
			</div>
		</section>	<!--COTIZADOR DE PRECIOS-->



		<!-- contact -->
	    <section id="contact">
	    	<div class="container text-center">
				<div class="row text-center">
					<div class="bg-image">
						<div class="col-md-6 col-md-offset-3 text-center share-text wow animated zoomInDown heading-text">
		                	<p class="heading">
		                		Si tiene algúna duda, por favor, no dude en dejarnos un mensaje
							</p>
						</div>
					</div>
				</div>


				<div class="row text-center main_content">
					<form method="post" action="{{url('/contacto')}}">
						{!! csrf_field() !!}
						<div class="col-md-4 col-md-offset-2 text-center">
							<div class="form">
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" placeholder="Nombre" required name="nombre" maxlength="20">
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-envelope-o fa-fw"></i>
	  								</span>
								 	<input class="form-control" name="email" type="email" placeholder="Email" required="required" maxlength="100">
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-tags fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" placeholder="Asunto" name="asunto" maxlength="100">
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="form">
								<div class="input-group margin-bottom-sm">
									<span class="input-group-addon">
										<i class="fa fa-comment-o fa-fw"></i>
									</span>
									<input type="text" name="mensaje" class="form-control message" placeholder="Escriba su mensaje aquí" maxlength="100">
								</div>
							</div>
						</div>
				</div>
				<input class="btn btn-sub" type="submit" value="Enviar mensaje" onclick="contacto();">
				</form>	
			</div>
	    </section>	<!-- contacts --> 
			
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




												<!-- JAVASCRIPT-->
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

	<!-- Cotizador -->
	<script type="text/javascript">
		function cotizar(){
			var blanco= document.getElementById('blancaKg').value;
			var color=  document.getElementById('colorKg').value;
			var cobija= document.getElementById('cobijasKg').value;
			var coti= (parseInt(blanco)*50)+(parseInt(color)*70)+(parseInt(cobija*60));
			document.getElementById('resul').value= coti;
		}

	</script>

<!-- Mandar datos de Cotizador a Reservación -->
	<script type="text/javascript">
		function pasaDatos(){
			var RopaBlanca= document.getElementById('blancaKg').value;
			var RopaColor= document.getElementById('colorKg').value;
			var CobijaCobertor= document.getElementById('cobijasKg').value;
		    document.getElementById('RB').value= RopaBlanca;
		    document.getElementById('RC').value= RopaColor;
			document.getElementById('CC').value= CobijaCobertor;

		}
	</script>


<!-- Validar solo numeros -->
	<script>
		function valida(e){
		    tecla = (document.all) ? e.keyCode : e.which;
		    //Tecla de retroceso para borrar, siempre la permite
		    if (tecla==8){
		        return true;
		    }    
		    // Patron de entrada, en este caso solo acepta numeros
		    patron =/[0-9]/;
		    tecla_final = String.fromCharCode(tecla);
		    return patron.test(tecla_final);
		}
</script>

	<!-- Mensaje de registro -->
	<script type="text/javascript">
		function reservado(){
			alert("Tu reservación ha sido exitosa. Te esperamos en: Av. Juan de Dios Batiz #16 con tus prendas. No olvides mencionar tu nombre para que nosotros sepamos la informacion de tu reservacion. ¡GRACIAS POR USAR NUESTRO SERVICIO! ");
		}
	</script>

<!-- Mensaje de contacto -->
	<script type="text/javascript">
		function contacto(){
			alert("Gracias por tu mensaje, nosotros te contactaremos :) ");
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
