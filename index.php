<?php include('header.php'); ?>

<section class="productos homepadding">
	<div class="container">
		<div class="row">
			<div class="col-12 float-right">
				<button id="opencart" class="addtocart">Ver carrito</button>
			</div>
		</div>
		<div class="row">
			<?php
				$iterador = 5;

				for($i=1;$i<=$iterador;$i++){
					?>
						<div class="col-md-3 col-sm-6 col-6">
							<div class="productsingle text-center">
								<form id="form_producto<?php echo $i; ?>" name="form_producto<?php echo $i; ?>" method="POST" class="form_producto">
									<img src="http://via.placeholder.com/500x300/000000" class="img-fluid" />
									<input type="hidden" name="imagen<?php echo $i; ?>" id="imagen<?php echo $i; ?>" value="http://via.placeholder.com/500x300/000000" class="imagen" />

									<div class="producttitle">
										Producto <?php echo $i; ?>
										<input type="hidden" name="nombre<?php echo $i; ?>" id="nombre<?php echo $i; ?>" value="Producto <?php echo $i; ?>" class="nombre" />
									</div>

									<div class="productdescription">
										Bajada de producto <?php echo $i; ?>
										<input type="hidden" name="description<?php echo $i; ?>" id="description<?php echo $i; ?>" value="Bajada de producto <?php echo $i; ?>" class="description" />
									</div>

									<div class="productprice">
										$1.500
										<input type="hidden" name="price<?php echo $i; ?>" id="price<?php echo $i; ?>" value="$1.500" class="price" />
									</div>

									<a href="#" class="addtocart">Agregar al carrito</a>
								</form>
							</div>
						</div>
					<?php
				}
			?>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>