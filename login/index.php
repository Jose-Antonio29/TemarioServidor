<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/grifo.ico">
	<title>GESTIÓN - CES VEGA MEDIA</title>	
</head>
<body>
	<!--Cabecera-->
	<div class="container-fluid cabecera">
		<header class="row justify-content-center align-items-center">	
			<div class="d-none d-md-block col-4  p-0 izq mt-4"></div>		
			<div class="col-12 col-md-4">									
				<div class="row justify-content-center align-items-center">						
					<div class="col-auto mt-1">
						<img class="m-0" src="img/GRIFO11.png" style="width:50px">
					</div>													
					<div class="col-auto">	
						<p class="text-center m-0"><span class="v"> V</span><span class="me">M</span></p>						
					</div>
					<div class="col-auto mt-1 ms-4"></div>
					<div class="w-100"></div>										
				</div>				
			</div>
			<div class="d-none d-md-block col-4 p-0 der mt-4"></div>	
			<div class="col-12 mb-1">
				<p class="h1 text-center">GESTIÓN CES - VEGA MEDIA</p>	
			</div>						
		</header>
	</div>	
	<!--Contenido de la página-->
	<section>	
		<div class="container">	
			<div class="row justify-content-center align-items-center">
				<div class="col-9 col-sm-8 col-md-6 col-xl-4 mb-5 mt-3" >
					<div class="row justify justify-content-center titulos mt-5 mb-4">
						<div class="col-12 mt-5">
							<p class="h2 text-center">ACCEDE A TU CUENTA</p>
						</div>
						<div class="col-8 mt-4">							
							<div class="row">
								<form action="accesob.php" method="POST">
									<div class="col-12">
										<input name="dni" type="text" class="form-control" placeholder="NIF" required>								
										<span class="form-text text-muted small">EJ: 12345678X</span>					
									</div>
									<div class="col-12 mt-3 mb-2">
										<input name="pass" type="password" class="form-control" id="pass" placeholder="CONTRASEÑA" required>
									</div>	
									<div class="col-12 mt-4 d-grid mb-5">
										<button class="btn btn-lg" type="submit">INICIAR SESIÓN</button>	
									</div>													
								</form>								
							</div>	
						</div>					
					</div>
					<div class="row">
						<div class="col-12 mb-1">	
							<p class="text-center cuenta">¿NECESITAS UNA CUENTA?</p>
							<a class="btn w-100" href="registro.html" role="buttom">REGÍSTRATE</a>
						</div>
					</div>					
				</div>				
			</div>	
		</div>	
	</section>
    <!--Pie de página-->
    <footer>
		<div class="container-fluid ">
			<div class="row justify-content-center footer1">
				<div class="row justify-content-center mt-4">
					<div class="col-auto" >
						<a href="https://www.google.es/maps/place/CES+Vega+Media/@38.0515582,-1.253702,17z/data=!3m1!4b1!4m5!3m4!1s0xd647ed425284579:0xc1fae33ccb32d958!8m2!3d38.0515582!4d-1.253702" target="_blank">						
						<i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;CES VEGA MEDIA, S. COOP.						
						</a>
					</div>
					<div class="w-100 d-sm-none"></div>	
					<div class="col-auto ">
						<i class="bi bi-envelope-fill"></i>&nbsp;&nbsp;vegamedia@ces-vegamedia.es
					</div>				
					<div class="w-100 d-sm-none"></div>	
					<div class="col-auto" >
						<i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;968 620 913<br>
					</div>				
				</div>		
				<div class="row justify-content-center align-items-center">
					<div class="col-auto" >						
							<img src="img/grifo.png" style="width:80px">						
					</div>
					<div class="col-auto">						
							<span class="ve"> V</span><span class="me">M</span>							
					</div>
					<div class="col-12 ">
						<p class="text-center">	Ctra. De Mula, 37 – Alguazas
							30560 – Murcia</p>					
					</div>					
				</div>
				<div class="row justify-content-center mb-2 links">
					<div class=" col-auto" >
						<a href="https://ces-vegamedia.es/aviso-legal/" target="_blank"> Aviso legal</a>					
					</div>
					<div class="col-auto" >
						<a href="https://ces-vegamedia.es/privacidad/" target="_blank">Política de privacidad</a>					
					</div>
					<div class="col-auto" >
						<a href="https://ces-vegamedia.es/cookies/" target="_blank">Política de cookies</a>					
					</div>
					<div class="col-auto" >
						<a href="https://ces-vegamedia.es/condiciones-de-compra/" target="_blank">Condiciones generales de contratación</a>					
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-12 text-center footer2">							
					<p class="mb-3 mt-2 small">COOPERATIVA COFINANCIADA POR EL FSE Y POR LA CARM        |        DESCUBRE TU TALENTO: + FP + OPORTUNIDADES<br>
					2022 CES VEGA MEDIA     |     CENTRO DE ENSEÑANZA©</p>							
				</div>				
			</div>
		</div>		
	</footer>
</body>
</html>
