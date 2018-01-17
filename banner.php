<!--Slider y menú-->

		
						


			
		 
		<!--banner-->

		<div class="banner">

			<!--menú de navegación-->	

			<?php include "navigation.php"; ?>

			<!--Imagen dinamica WP-->
			
			<?php 
				$destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

			 ?>
			 <?php $destacada = $destacada[0]; ?>
			<div class="fondo-banner" style="background-image: url(<?php echo $destacada; ?>);">
	
				 	
			 </div>
		
			<!--Busqueda y traducción-->
			
			<div class="d-flex justify-content-end">

				<div class="buscar d-flex">

					<div class="boton-buscar">

						<button id="click" class="click">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>

					</div>

					<div id="busqueda" style="display: none;">
						<!--Buscador interno-->
			
						<?php dynamic_sidebar('topbar'); ?>	
			
					</div>

				</div>

				<!--traductor-->

				<div class="traductor d-flex">

					<div class="boton-traductor">

						<button id="click-traductor" class="click">

							<i class="fa fa-globe" aria-hidden="true"></i>
			
						</button>

					</div>

					<div id="traductor" style="display: none;">

						<?php dynamic_sidebar('topbar2'); ?>

					</div>

				</div>


					<!--Botón de accesibilidad-->

						<div class="accesibilidad d-flex">

					<div class="">

						<button id="acc" class="click" >

							<i class="fa fa-universal-access" aria-hidden="true"></i>

						</button>		



					</div>

				</div>

				


			</div>


			
			<!--Cuadro con texto dentro la imagen-->

			<div class="text-in-img d-none d-md-block">

				<span>
					<?php bloginfo( description ); ?>
				</span>

			</div>

			

			

		</div>
		</div>

