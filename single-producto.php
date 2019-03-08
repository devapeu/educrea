<?php 
/*
Template Name: Single Product Template
*/
get_header(); ?>
	<main class="main">
		<section class="section">
			<div class="container">
				<?php if (have_posts()): while(have_posts()): the_post(); ?>
				<div class="columns">
					<div class="column is-5">
						<div class="card">
							<figure class="image is1by1">
								<a data-fancybox="gallery" href="<?php the_field('imagen_uno') ?>">
									<img src="<?php the_field('imagen_uno') ?>" alt="Foto producto" class="img">
								</a>
							</figure>
						</div>
						<?php if (get_field('imagen_dos')): ?>
							<figure class="image is-row is-96x96">
								<div class="card">
									<a data-fancybox="gallery" href="<?php the_field('imagen_dos') ?>">
										<img src="<?php the_field('imagen_dos') ?>" alt="Foto producto" class="img">
									</a>
								</div>
							</figure>
						<?php endif ?>
					</div>
					<div class="column">
						<div class="section">
							<h1 class="title"><?php the_title(); ?></h1>
							<div><?php the_content(); ?></div>
							<?php if (get_field('pdf_file')): ?>
								<a href="<?php utf8_encode(the_field('pdf_file')) ?>" target="_blank" class="button has-margin-top has-no-corner is-medium is-primary"><span class="icon has-text-white"><i class="fas fa-file-pdf"></i></span><b>Descargar PDF</b></a>
							<?php endif ?>

						</div>
					</div>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e("Lo sentimos. No hay publicaciones por aquí."); ?></p>
				<?php endif ?>
			</div>
		</section>
		<?php include 'include/contact.template.php' ?>
		<?php include 'include/map.template.php' ?>
	</main>
<?php get_footer(); ?>
