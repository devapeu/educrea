<?php get_header(); ?>	
	<main class="main">
		<div class="hero is-medium" id="nosotros" style="background: url(<?php echo get_template_directory_uri();?>/img/hero_image_03.jpg); background-size: cover; background-position: center;">
			<div class="hero-body">
				<h1 class="has-text-centered title has-text-white"><?php single_cat_title(); ?></h1>
			</div>
		</div>
		<section class="section">
			<div class="container">

				<?php if (is_category('infraestructura-tecnologica') || is_category('contenido-y-aplicaciones')): ?>
					<?php 
					$this_category = get_category($cat);
					if (get_category_children( $this_category->cat_ID ) != "") {
						$childcategories = get_categories(array(
						    'orderyby' => 'name',
						    'hide_empty' => false,
						    'parent' => $this_category->cat_ID // This returns only direct children of the category
						));
						echo '<div class="categories">';
				        foreach($childcategories as $category) {

				        	// Determine if the current category has posts or not
				        	global $post;
				        	$has_posts = true;
				        	$args = array( 'post_type' => 'producto', 'category' => $category->term_id);
				        	$myposts = get_posts($args);
				        	if (!$myposts) {
				        		$link = "/#contacto";
				        	} else {
				        		$link = get_category_link( $category->term_id );
				        	}
				        	?>
				        	<a href="<?= $link ?>" class="category">
				        		<div class="carta">
				        			<p>Ver productos en:</p>
				        			<h2 class="title is-4"><?= $category->name ?></h2>
				        		</div>
				        	</a>
				        <?php }
				        echo "</div>";
					}?>
					<hr>
					<?php include 'include/loop_category.template.php' ?>
				<?php elseif (is_category('capacitacion') ||
						  is_category('preventa') ||
						  is_category('postventa') ||
						  is_category('financieros')): ?>
					<?php 
					$this_category = get_category($cat);
					if (get_category_children( $this_category->cat_ID ) != "") {
						$childcategories = get_categories(array(
						    'orderyby' => 'name',
						    'hide_empty' => false,
						    'child_of' => $this_category->cat_ID // This returns all children categories
						));
						echo '<div class="categories">';
				        foreach($childcategories as $category) {?>
				        	<a href="/#contacto" class="category">
				        		<div class="carta">
				        			<h2 class="title is-4"><?= $category->name ?></h2>
				        		</div>
				        	</a>
				        <?php }
				        echo "</div>";
					}?>
				<?php else: ?>
					<?php include 'include/loop_category.template.php' ?>
				<?php endif ?>
			</div>
		</section>
		<?php include 'include/contact.template.php' ?>
		<?php include 'include/map.template.php' ?>
	</main>
<?php get_footer(); ?>	
