<div class="columns is-multiline">
<?php 
// Get the current category
$category = get_queried_object();
$category_id =  $category->term_id;
// Create the arguments
$args = array ( 'post_type' => 'producto', 'category' => $category_id, 'posts_per_page' => -1, 'order' => 'ASC');
$myposts = get_posts( $args );
// Loop posts
foreach( $myposts as $post ) :	setup_postdata($post);
 ?>
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
<?php endforeach; ?>
</div>