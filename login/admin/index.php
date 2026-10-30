<?php
    include('sesion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="../styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../img/grifo.ico">
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
						<img class="m-0" src="../img/GRIFO11.png" style="width:50px">
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
		
		<!--Barra de navegación-->
        <?php
            include('navAdmin.php');
        ?>
	
    <!--Contenido de la página-->
	<section>	
		<div class="container">	
			<div class="row justify-content-center align-items-center">
				<div class="col-9 col-sm-8 col-md-6 col-xl-4 mb-5 mt-3" >
					
				
				</div>				
			</div>	
		</div>	
	</section>

    
	<script src="./Bootstrap/js/bootnavbar.js"></script>
    <script>
      new bootnavbar();
    </script>
	
</body>
</html>