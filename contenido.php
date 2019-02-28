<?php include 'include/header.php' ?>
	<main class="main">
		<section class="section">
			<div class="container">
				<div role="categories-grid">
					<div class="tile is-ancestor has-no-margin">
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!-- <p>Ver productos en:</p>-->
									<h2 class="title is-4">Contenido especializado</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!-- <p>Ver productos en:</p>-->
									<h2 class="title is-4">Contenido curricularizado</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
					</div> <!-- End Ancestor -->
					<div class="tile is-ancestor has-no-margin">
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!-- <p>Ver productos en:</p>-->
									<h2 class="title is-4">Contenido libre</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
						<div class="tile is-parent">
							<a href="categoria.php" class="tile is-child card">
								<div class="card-content">
									<!-- <p>Ver productos en:</p>-->
									<h2 class="title is-4">Aplicaciones educativas</h2>
									<div class="hover-icon"><span class="icon"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</a>
						</div>  <!-- End Parent -->
					</div> <!-- End Ancestor -->
				</div>
			</div>
		</section>
		<section class="section has-text-white" id="contacto" style="background: url(img/hero_image.png); background-size: cover; background-position: center;">
			<div class="container">
				<div class="columns is-offset">
					<div class="column">
						<div class="content">
							<h1 class="has-text-white">¿Tienes una duda?</h1>
							<p class="has-text-white">¡Ponte en contacto con nosotros!</p>
							<div class="box-space">
								<span class="has-text-white">Anna Sanchez</span>
								<br>
								<a href="#" class="has-text-white">
									<span class="icon has-text-white">
										<i class="fas fa-envelope"></i>
									</span>asanchez@educrea.pe
								</a> | 
								<span class="icon has-text-white">
									<i class="fas fa-phone"></i>
								</span> 938 156 929
							</div>
							<div class="box-space">
								<span class="has-text-white">Diana Trasmonte</span>
								<br>
								<a href="#" class="has-text-white">
									<span class="icon has-text-white">
										<i class="fas fa-envelope"></i>
									</span>dtrasmonte@educrea.pe
								</a> | 
								<span class="icon has-text-white">
									<i class="fas fa-phone"></i>
								</span> 994 466 247
							</div>
							<div class="box-space">
								<span class="has-text-white">David Antayhua</span>
								<br>
								<a href="#" class="has-text-white">
									<span class="icon has-text-white">
										<i class="fas fa-envelope"></i>
									</span>dantayhua@educrea.pe
								</a> | 
								<span class="icon has-text-white">
									<i class="fas fa-phone"></i>
								</span> 950 421 981
							</div>
							<h5 class="has-text-white">Visítanos en:</h5>
							<ul>
								<li><span class="icon has-text-white"><i class="fas fa-map-marker-alt"></i></span>   Av. República de Panamá 3563 - Oficina 101 | San Isidro</li>
							</ul>
						</div>
					</div>
					<div class="column">
						<div class="card">
							<div class="card-content">
								<div class="section">
									<form action="#">
										<div class="field">
											<div class="control">
												<input type="text" name="name" class="input" placeholder="Nombre">
											</div>
										</div>
										<div class="field">
											<div class="control">
												<input type="text" name="business" class="input" placeholder="Empresa">
											</div>
										</div>
										<div class="field">
											<div class="control">
												<input type="text" name="email" class="input" placeholder="Email">
											</div>
										</div>
										<div class="field">
											<div class="control">
												<textarea name="message" class="textarea" noresize placeholder="Su mensaje..."></textarea>
											</div>
										</div>
										<div class="field">
											<div class="control">
												<input type="submit" value="Enviar" class="button is-fullwidth is-gradient">
											</div>
										</div>
									</form>
								</div> <!-- End of .section -->
							</div> <!-- End of .card-content -->
						</div> <!-- End of .card -->
					</div> <!-- End of .column -->
				</div>
			</div>
		</section>
		<section class="section" style="padding: 0">
			<div class="main-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d62417.927572229295!2d-77.05555673386374!3d-12.103904190335616!3m2!1i1024!2i768!4f13.1!2m1!1spancho+cavero+veterinaria!5e0!3m2!1ses-419!2spe!4v1535470003933" width="1920" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
	</main>
	<script src="js/scripts.js"></script>
	<footer class="footer">
		<div class="container">
			&copy; Studio 24 - 2019
		</div>
	</footer>
</body>
</html>