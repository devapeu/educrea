<?php get_header(); ?>	
<main class="main">
		<div class="hero is-medium has-text-white" id="nosotros" style="background: url(<?php echo get_template_directory_uri();?>/img/hero_image_02.png); background-size: cover; background-position: center;">
			<div class="hero-body">
				<div class="container">
					<div class="columns">
						<div class="column is-6">
							<h1 class="title is-1 has-text-white">Nosotros</h1>
							<p>Educrea es un mayorista de <b>soluciones educativas innovadoras</b> para proyectos de valor en el sector educación. Nuestro objetivo es que nuestros socios de negocios se conviertan en canales especialistas en implementación de proyectos educativos integrales. </br></br>Nuestras soluciones incluyen hardware, software, contenido educativo y nuestros servicios especializados de implementación y capacitaciones. Visite nuestro Showroom totalmente equipado en <b>Avenida República de Panamá 3563 Oficina 101 – San Isidro.</b></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="section" id="soluciones">
			<div class="container">
				<h1 class="title has-text-centered">Soluciones Educativas Innovadoras</h1>
				<p class="subtitle has-text-centered is-6">Nuestro modelo de Aula interactiva incluye:</p>
				<ul class="wrapped-list">
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica" class="level-item has-text-centered">
						<span class="icon is-large has-text-primary">
						  <i class="fas fa-project-diagram fa-2x"></i>
						</span>
						<h4 class="title is-6">Infraestructura tecnológica</h4>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/contenido-y-aplicaciones" class="level-item has-text-centered">
						<span class="icon is-large has-text-primary">
						  <i class="fas fa-rocket fa-2x"></i>
						</span>
						<h4 class="title is-6">Contenido y aplicaciones</h4>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/capacitacion" class="level-item has-text-centered">
						<span class="icon is-large has-text-primary">
						  <i class="fas fa-graduation-cap fa-2x"></i>
						</span>
						<h4 class="title is-6">Capacitación y asesoría para docentes</h4>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/preventa" class="level-item has-text-centered">
						<span class="icon is-large has-text-primary">
						  <i class="fas fa-cash-register fa-2x"></i>
						</span>
						<h4 class="title is-6">Servicios pre-Venta</h4>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/postventa" class="level-item has-text-centered">
						<span class="icon is-large has-text-primary">
						  <i class="fas fa-shopping-cart fa-2x"></i>
						</span>
						<h4 class="title is-6">Servicios post-Venta</h4>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/financieros" class="level-item has-text-centered">
						<span class="icon is-large has-text-primary">
						  <i class="fas fa-business-time fa-2x"></i>
						</span>
						<h4 class="title is-6">Servicios financieros y logísticos</h4>
					</a>
				</ul>
			</div>
		</section>
		<hr>
		<section class="section" id="canales">
			<div class="container">
				<h1 class="title has-text-centered">Canales de venta</h1>
				<p class="text">Nuestras soluciones se comercializan a través de nuestros socios de negocios registrados.</p>
			</div>
		</section>
		<hr>
		<section class="section">
			<div class="container">
				<h1 class="has-text-centered title">Últimos productos</h1>
				<div class="columns is-multiline">
					<?php 
					$args = array('post_type' => 'producto', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'ASC');
					$query = new WP_Query($args);
					$count = 1;
					if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					<div class="producto column is-3-desktop is-6-tablet">
						<div class="card">
							<div class="card-image">
								<div class="card-product" style="background-image: url(<?php the_field('imagen_uno') ?>)"></div>
							</div>
							<div class="card-content">
								<h4 class="title is-6 has-text-weight-bold"><?php the_title(); ?></h4>
							</div>
							<a href="<?php the_permalink(); ?>" class="card-footer button-footer">Ver más</a>
						</div>
					</div>
					<?php endwhile; else: ?>
					<p><?php _e("Nothing here!"); ?></p>
					<?php endif ?>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="categories">
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica/proyeccion-interactiva" class="category">
						<div class="carta">
							<p>Ver productos en:</p>
							<h2 class="title is-4">Proyección interactiva</h2>
						</div>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica/proyectores-multimedia" class="category">
						<div class="carta">
							<p>Ver productos en:</p>
							<h2 class="title is-4">Proyectores multimedia</h2>
						</div>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica/impresoras-3d" class="category">
						<div class="carta">
							<p>Ver productos en:</p>
							<h2 class="title is-4">Impresoras 3D</h2>
						</div>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica/contenido" class="category">
						<div class="carta">
							<p>Ver productos en:</p>
							<h2 class="title is-4">Contenido concreto digital</h2>
						</div>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica/servidor-educativo" class="category">
						<div class="carta">
							<p>Ver productos en:</p>
							<h2 class="title is-4">Servidores educativos</h2>
						</div>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/infraestructura-tecnologica/dispositivos-estudiantes" class="category">
						<div class="carta">
							<p>Ver productos en:</p>
							<h2 class="title is-4">Dispositivos estudiantes</h2>
						</div>
					</a>
				</div>
			</div>
		</section>
		<?php include 'include/contact.template.php' ?>
		<?php include 'include/map.template.php' ?>
	</main>
<?php get_footer(); ?>