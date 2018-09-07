<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prueba Mitocondria</title>
		<meta name="Prueba Mitocondria" content="Prueba Mitocondria">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="assets/css/style.css" rel="stylesheet">
	</head>

	<body>
		<div class="headerbar">
			Prueba 07/09/2018
		</div>

		<div class="searchbar">	
			<?php
				$apiUrl = 'https://mindicador.cl/api';

				if ( ini_get('allow_url_fopen') ) {
				    $json = file_get_contents($apiUrl);
				} else {
				    $curl = curl_init($apiUrl);
				    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				    $json = curl_exec($curl);
				    curl_close($curl);
				}

				$dailyIndicators = json_decode($json);
			?>
			<div class="container">
				<div class="row indicators">
					<div class="col-md-4 offset-md-8 indicator">
						UF hoy: $<?php echo $dailyIndicators->uf->valor; ?>
					</div>
					<div class="col-md-4 offset-md-8 indicator">
						Dólar observado hoy: $<?php echo $dailyIndicators->dolar->valor; ?>
					</div>
					<div class="col-md-4 offset-md-8 indicator">
						Dólar intercambio hoy: $<?php echo $dailyIndicators->dolar_intercambio->valor; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="cart">
			<div class="container">
				<div class="carttitle">Carro de compras</div>

				<?php
					$query = "SELECT id, nombre, descripcion, precio, imagen FROM carrocompras";

					if ($result=mysqli_query($enlace, $query)) {
						while ($row=mysqli_fetch_row($result)){
							?>
								<div class="row mt-2">
									<div class="col-12">
										<img class="img-fluid" src="<?php echo $row[4]; ?>" />
									</div>
									<div class="col-12">
										<div class="nombre"><?php echo $row[1]; ?></div>
									</div>
									<div class="col-12">
										<div class="precio"><?php echo $row[3]; ?></div>
									</div>
									<div class="col-12 mt-2">
										<a href="#" class="removefromcart">Remover del carrito</a>
									</div>
								</div>
								<hr>
							<?php
						}
					}
				?>
			</div>
		</div>