<?php include 'include/header.php' ?>
	<main class="main">
		<section class="section">
			<div class="container">
				<div role="categories-grid">
					<div class="tile is-ancestor has-no-margin">
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!--<p>Ver productos en:</p>-->
									<h2 class="title is-4">Arredamiento</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!--<p>Ver productos en:</p>-->
									<h2 class="title is-4">Crédito</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!--<p>Ver productos en:</p>-->
									<h2 class="title is-4">Logístico</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
					</div> <!-- End Ancestor -->
				</div>
			</div>
		</section>
		<?php include 'include/contact.template.php' ?>
		<?php include 'include/map.template.php' ?>
	</main>
<?php include 'include/footer.php' ?>