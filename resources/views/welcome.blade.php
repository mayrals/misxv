<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>MIS XV</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
			h1 {
				background-image: linear-gradient(to right, #FFC0CB, #87CEFA);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				}

			#send {
				background-image: linear-gradient(to right,  #a74fff ,#87CEFA);
				color: #fff;
				font-size: 1.2rem;
				border-radius: 5px;
				box-shadow: 2px 2px 5px rgba(199,21,133, 0.3);
				transition: transform 0.2s ease-in-out;
			}
			#send:hover {
				transform: scale(1.1);
				}
			#send:active {
				transform: scale(0.9);
			}

			.spinner {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-top-color: #000;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  animation: spin 1s ease-in-out infinite;
  margin-right: 8px;
  display: inline-block;
  vertical-align: middle;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

#loading-indicator {
  text-align: center;
  padding: 24px;
  font-size: 16px;
  color: #666;
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
				
		</style>

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container  ">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>MIS XV </h1>
							<h1>XIMENA GUTIERREZ LÓPEZ</h1>
                            <h4>RESERVA AQUI TU LUGAR PARA ESTE GRAN EVENTO</h4>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
                   
						<div class="booking-form">
                           
							    <form id="form-passes" >
									<label class="form-label">Escribe tu número y selecciona el boton de Buscar </label>
                                <div class="row mt-4">
									<div class="col-sm-12 ">
										<div class="form-group ">
											<span class="form-label ">Celular</span>
											
											<input class="form-control" type="text" id="phone_number" name="phone_number" required>
											<button class="btn btn-info  mt-3"  id="clicksearch">Buscar</button>

											<!-- {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!} -->
											
										</div>
									</div>
										
								</div>   

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group ">
											<span class="form-label">Familia</span>
											
											<input class="form-control " type="text" name="familia" id="familia" required readonly>
											
										</div>
									</div>
									
									
								</div>	


								



								


								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Pases disponibles</span>
											<input class="form-control" type="text" value="" id="passes-list" style="color:red;" required readonly>
										</div>
									</div>
									
								</div>

								<div class="row">
									
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Selecciona el numero de pases que ocuparas :</span>
											<input class="form-control" type="number" name='pasesocupados' id='pasesocupados' required>
										</div>
									</div>
								</div>


								
								<div class="form-btn " id='genin'>

									<button class="btn " id="send">Generar invitación</button>
								</div>

								<div id="loading-indicator" style="display: none;">
									<div class="spinner"></div>
									<p>Cargando...</p>
								  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

			<script>


				const formPasses = document.querySelector('#form-passes');
				const clicksearch = document.querySelector('#clicksearch');
				const passesList = document.querySelector('#passes-list');
				const pasesocupados = document.querySelector('#pasesocupados');
				const familia = document.querySelector('#familia');
				const send = document.querySelector('#send');
				
				clicksearch.addEventListener('click', event => {
					var APP_URL = {!! json_encode(url('/')) !!}
					event.preventDefault();

					
					const formData = new FormData(formPasses);
					const phoneNumber = formData.get('phone_number');
					
					fetch( APP_URL + `/welcome/${phoneNumber}`)
						.then(response => response.json())
						.then(data => {
								familia.value = `${data.passes.nombre_familia}`;
								passesList.value = `${data.passes.total_pases}`;
						})
						.catch(error => {
							console.error(error);
						});
				});

				


				send.addEventListener('click', event => {
				var APP_URL = {!! json_encode(url('/')) !!}
				event.preventDefault();

				const loadingIndicator = document.querySelector('#loading-indicator');
				const loadinggen = document.querySelector('#genin');


				loadingIndicator.style.display = 'block';
				loadinggen.style.display = 'none';



				const formData = new FormData(formPasses);
				const phoneNumber = formData.get('phone_number');
				const pasesocupados = formData.get('pasesocupados');
				const totalPases = parseInt(passesList.value); // convertir a número entero

				if (phoneNumber.length === 0 || pasesocupados.length === 0  ) {
					Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Por favor complete todos los campos.'
					});
					loadingIndicator.style.display = 'none';
						loadinggen.style.display = 'block';

					
					return; // Se sale de la función si no se cumple la validación
				}

				if (parseInt(pasesocupados) > totalPases) {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: 'No puede seleccionar más pases de los que tiene disponibles.'
					});
					loadingIndicator.style.display = 'none';
						loadinggen.style.display = 'block';
				} else {
					fetch( APP_URL + `/activity/${phoneNumber}/${pasesocupados}`)
						// .then(response => response.json())
						.then(data => {
							// hacer algo con la respuesta
							Swal.fire({
								icon: 'success',
								title: 'Invitación enviada Correctamente',
								text: 'La invitación y pases se han enviado a tu aplicación de Telegram , gracias por registrarte.'
								});
						})
						.finally(() => {
						// oculta el indicador de carga
						loadingIndicator.style.display = 'none';
						loadinggen.style.display = 'block';

						})
						.catch(error => {
							console.error(error);
						});
				}
			});


			</script>
		</div>
	</div>
</body>

</html>