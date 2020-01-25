<?php get_header(); ?>
<section id="top" class="banner" data-aos="fade-down" data-aos-duration="1000">
</section>
<section class="text-banner pb-5 container" id="inicio">
	<div class="row">
		<div class="col-sm-8 col-md-6 order-1 order-md-0">
			<?php 
			    // Argumentos para una busqueda de post type
			    $args = array(
			      'post_type' => 'bienvenido', // Nombre del post type
			      'order' => 'ASC'
			    );
			    $bienvenidos = new WP_Query($args);
			    if ($bienvenidos->posts):
			      // Foreach para recorrer el resultado de la busqueda
			        foreach ($bienvenidos->posts as $bienvenido):
			          $bienvenido_name = $bienvenido->post_title;
			          $bienvenido_desc = $bienvenido->post_content;
			  ?>
			<h1><?php echo $bienvenido_name; ?></h1>
			<p>
				<?php echo $bienvenido_desc; ?>
			</p>
			<!--<a href="" class="button bg-salmon color-white">Ver más</a>-->
			<?php
			 endforeach;
			 endif; 
		    ?>
		</div>
	</div>
</section>
<section class="catalogo" id="catalogo">
	<div class="figure1" data-aos="fade-up-right" data-aos-duration="1000"></div>
	<div class="figure2" data-aos="fade-up-right" data-aos-duration="1000"></div>
	<div class="figure3" data-aos="fade-up-right" data-aos-duration="1000"></div>
	<div class="container">
		<div class="row">
			<div class="col-11 col-md-6 bg-salmon py-5 color-white catalogo-text" data-aos="fade-left" data-aos-duration="1000">
				<?php 
				    // Argumentos para una busqueda de post type
				    $args = array(
				      'post_type' => 'catalogo', // Nombre del post type
				      'order' => 'ASC'
				    );
				    $catalogos = new WP_Query($args);
				    if ($catalogos->posts):
				      // Foreach para recorrer el resultado de la busqueda
				        foreach ($catalogos->posts as $catalogo):
				          $catalogo_name = $catalogo->post_title;
				          $catalogo_desc = $catalogo->post_content;
				?>				
				<h2><?php echo $catalogo_name;?></h2> 
				<p>
					<?php echo $catalogo_desc;?>
				</p>
				<?php
				 endforeach;
				 endif; 
			    ?>
			</div>
			<div class="col-md-6 z-catalogo" data-aos="fade-right" data-aos-duration="1000">
				<div class="carousel-catalogo">
					<?php 
				    // Argumentos para una busqueda de post type
				    $args = array(
				      'post_type' => 'carrusel-producto', // Nombre del post type
				      'order' => 'ASC'
				    );
				    $productos = new WP_Query($args);
				    if ($productos->posts):
				      // Foreach para recorrer el resultado de la busqueda
				        foreach ($productos->posts as $producto):
							$producto_name = $producto->post_title;
							$producto_img = wp_get_attachment_url( get_post_thumbnail_id($producto->ID, 'full') ); // Url de la imagen en tamaño Full
					?>
					<div>
						<h3 class="title-catalogo"><?php echo $producto_name; ?></h3>
						<img src="<?php echo $producto_img;?>" class="img-fluid m-auto" title="<?php echo $producto_name; ?>" alt="<?php echo $producto_name; ?>">
					</div>
					<?php
					 endforeach;
					 endif; 
				    ?>
				</div>
				<div class="catalogo-nav d-none d-md-block">
					<?php 
				    // Argumentos para una busqueda de post type
				    $args = array(
				      'post_type' => 'carrusel-producto', // Nombre del post type
				      'order' => 'ASC'
				    );
				    $productos = new WP_Query($args);
				    if ($productos->posts):
				      // Foreach para recorrer el resultado de la busqueda
				        foreach ($productos->posts as $producto):
			        	$producto_name = $producto->post_title;
				          $producto_img = wp_get_attachment_url( get_post_thumbnail_id($producto->ID, 'full') ); // Url de la imagen en tamaño Full
					?>
					<div>
						<img src="<?php echo $producto_img;?>" class="img-fluid m-auto" alt="<?php echo $producto_name;?>" title="<?php echo $producto_name;?>">
					</div>
					<?php
					 endforeach;
					 endif; 
				    ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="img-city">
	<img src="<?php echo get_template_directory_uri(); ?>/img/globo.svg" title="globo" alt="globo" class="globo" data-aos="fade-up" data-aos-duration="1000">
	<img src="<?php echo get_template_directory_uri(); ?>/img/nubeR.svg" title="nube" alt="nube" class="nubes nubes1">
	<img src="<?php echo get_template_directory_uri(); ?>/img/nubeC.svg" title="nube" alt="nube" class="nubes nubes2">
	<img src="<?php echo get_template_directory_uri(); ?>/img/nubeL.svg" title="nube" alt="nube" class="nubes nubes3">
	<img src="<?php echo get_template_directory_uri(); ?>/img/city.svg" title="ciudad" alt="ciudad" class="w-100 bg d-none d-sm-block" data-aos="fade-up" data-aos-duration="1000">
	<img src="<?php echo get_template_directory_uri(); ?>/img/city-mobile.svg" title="ciudad" alt="ciudad" class="w-100 bg d-block d-sm-none" data-aos="fade-up" data-aos-duration="1000">
</section>
<section class="servicios" id="servicios">
	<div class="figure1" data-aos="fade-right" data-aos-duration="4000"></div>
	<div class="figure2" data-aos="fade-left" data-aos-duration="4000"></div>
	<div class="figure3" data-aos="fade-down" data-aos-duration="4000"></div>
	<div class="container shadow py-5 p-lg-5">
		<div class="row">
			<div class="col-12">
				<div class="row">
				<?php 
				    // Argumentos para una busqueda de post type
				    $args = array(
				      'post_type' => 'servicios-intro', // Nombre del post type
				      'order' => 'ASC'
				    );
				    $servicios = new WP_Query($args);
				    if ($servicios->posts):
				      // Foreach para recorrer el resultado de la busqueda
				        foreach ($servicios->posts as $servicio):
				          $servicio_name = $servicio->post_title;
				          $servicio_sup = $servicio->sub_titulo;
				          $servicio_desc = $servicio->post_content;
				          $servicio_img = wp_get_attachment_url( get_post_thumbnail_id($servicio->ID, 'full') ); // Url de la imagen en tamaño Full
				  ?>

					<div class="col-md-4 text-servicios d-block d-md-none">
						<h2><?php echo $servicio_name;?></h2>
					</div>
					<div class="col-md-4 text-servicios order-1 order-md-0 serv-descrip" data-aos="fade-left" data-aos-duration="4000">
						<h2 class="d-none d-md-block"><?php echo $servicio_name;?></h2>
						<h5><?php echo $servicio_sup;?></h5> 
						<p>
							<?php echo $servicio_desc;?>
						</p>
						<!-- <a href="" class="button bg-gray color-black">Ver más</a> -->
					</div>
					<div class="col-md-8 order-0 order-md-1" data-aos="fade-right" data-aos-duration="9000">
						<img src="<?php echo $servicio_img;?>" class="img-fluid" title="<?php echo $servicio_name;?>" alt="<?php echo $servicio_name;?>">
					</div>
	                <?php
	                 endforeach;
	                 endif; 
	                ?>					
				</div>
			</div>
			<div class="offset-md-4 col-md-8" data-aos="fade-up" data-aos-duration="4000">
				<div class="carousel-servicios">
					<?php 
				    // Argumentos para una busqueda de post type
				    $args = array(
				      'post_type' => 'carrusel_servicios', // Nombre del post type
				      'order' => 'ASC'
				    );
				    $servicios = new WP_Query($args);
				    if ($servicios->posts):
				      // Foreach para recorrer el resultado de la busqueda
				        foreach ($servicios->posts as $servicio):
				          $servicio_img = wp_get_attachment_url( get_post_thumbnail_id($servicio->ID, 'full') ); // Url de la imagen en tamaño Full
				          $servicio_name = $servicio->post_title;
				          $servicio_desc = $servicio->post_content;
					?>
					<div>
						<img src="<?php echo $servicio_img;?>" class="img-fluid" alt="<?php echo $servicio_name;?>" title="<?php echo $servicio_name;?>">
						<h6><?php echo $servicio_name;?></h6>
						<p class="color-gray"><?php echo $servicio_desc;?></p>
					</div>
	                <?php
	                 endforeach;
	                 endif; 
	                ?>	
				</div>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo-form.svg" title="logo servicios" alt="logo servicios" class="logo-servicios" data-aos="flip-right" data-aos-duration="4000">
	</div>
</section>
<section class="form" data-aos="ease-in" data-aos-duration="1000" id="contacto">
	<div class="figure1" data-aos="fade-down" data-aos-duration="1000"></div>
	<div class="figure2" data-aos="fade-down" data-aos-duration="1000"></div>
	<div class="container py-5 shadow">
		<div class="row">
			<div class="col-md-12 py-4 text-center">
				<h2>Contáctenos</h2>
			</div>
			<div class="col-md-6" data-aos="fade-up" data-aos-duration="4000">
                <?php 
                    // Argumentos para una busqueda de post type
                    $args = array(
                      'post_type' => 'contacto', // Nombre del post type
                      'order' => 'ASC'
                    );
                    $contactos = new WP_Query($args);
                    if ($contactos->posts):
                      // Foreach para recorrer el resultado de la busqueda
                        foreach ($contactos->posts as $contacto):
                          $contacto_desc = $contacto->code;
                  ?>
                  <?php
                     endforeach;
                     endif; 
                    ?>
            		<?php echo $contacto_desc;?>
			</div>
			<div class="col-md-6 map" data-aos="fade-right" data-aos-duration="4000">
				<div id="map" class="map-js"></div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>