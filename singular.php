<?php
	/**
	 * The template for displaying single posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package WordPress
	 * @subpackage Twenty_Twenty
	 * @since Twenty Twenty 1.0
	 */

	// Appel du fichier header.php
	get_header();
?>

<?php
// Si la page rechercée est la page recette
	if(is_page('recette')){
?>

<div class="bandeau_bienvenue" style="text-align: center; color: white; background-color: rgba(186,85,211, 0.8);">

	<p style="width: 100%">
		Bienvenue
		<br>

		<i class="large material-icons">
			mood
		</i>

		<i class="large material-icons">
			restaurant_menu
		</i>
	</p>

</div>
<!-- / .bandeau_bienvenue -->

<div class="row">

<div class="col s12 plat z-depth-3">
	<!-- la class z-depth-3 permet de faire de l'ombre -->
 <?php
	 $requete_texte_bienvenue_haut = new WP_Query('category_name=texte_bienvenue_haut&posts_per_page=1');

	 if ( $requete_texte_bienvenue_haut->have_posts() ) {
				 while ( $requete_texte_bienvenue_haut->have_posts() ) {
				 $requete_texte_bienvenue_haut->the_post();
				 //ici c'est les catégories que l'on crée en BO (Back-office) puis ici pour pouvoir le ratacher à un article
 ?>
				 <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->

				 <h2 style="font-size: 60px; margin: 40px;">
					 <?php
						 the_title();
					 ?>
				 </h2>

				 <?php
				 // Permet d'afficher le contenu de l'article
					 the_content();
				 }
				 // end of while
		 } else {
		 ?>
		 <p>Pas encore d'article ! :)</p>
 <?php
	 }
 ?>
 <!-- end of the WP_Query -->
</div>
<!-- fin col s12 plat (on préviligie le s pour le mode mobile) -->
</div>
<!-- fin row -->

<div class="row">
 <div class="col s6 informations">
	 <?php
		 $requete_texte_bienvenue_g = new WP_Query('category_name=texte_bienvenue_g&posts_per_page=1');

		 if ( $requete_texte_bienvenue_g->have_posts() ) {
					 while ( $requete_texte_bienvenue_g->have_posts() ) {
					 $requete_texte_bienvenue_g->the_post();
	 ?>
					 <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->
					 <h2 style="color: red;">
						 <?php
						 // Permet d'afficher le titre de l'article (optionnel)
							 the_title();
						 ?>
					 </h2>
					 <?php
					 // Permet d'afficher le contenu de l'article
						 the_content();
					 }
					 // end of while
			 } else {
			 ?>
			 <p>Pas encore d'article ! :)</p>
	 <?php
		 }
	 ?>
	 <!-- end of the WP_Query -->

 </div>
 <!-- fin col s6 informations -->

 <div class="col s6 ingrédients">
	 <?php
		 $requete_texte_bienvenue_droite = new WP_Query('category_name=texte_bienvenue_droite&posts_per_page=1');

		 if ( $requete_texte_bienvenue_droite->have_posts() ) {
					 while ( $requete_texte_bienvenue_droite->have_posts() ) {
					 $requete_texte_bienvenue_droite->the_post();
	 ?>
					 <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->

					 <h2 style="color: red;">
						 <?php
							 the_title();
						 ?>
					 </h2>
					 <?php
					 // Permet d'afficher le contenu de l'article
						 the_content();
					 }
					 // end of while
			 } else {
			 ?>
			 <p>Pas encore d'article ! :)</p>
	 <?php
		 }
	 ?>
	 <!-- end of the WP_Query -->
 </div>
  <!-- fin col s6 ingrédients -->
</div>
<!-- fin row -->

 <div class="row">
 <div class="col s12 etapes">
	<?php
		$requete_texte_bienvenue_bas = new WP_Query('category_name=texte_bienvenue_bas&posts_per_page=1');

		if ( $requete_texte_bienvenue_bas->have_posts() ) {
					while ( $requete_texte_bienvenue_bas->have_posts() ) {
					$requete_texte_bienvenue_bas->the_post();
	?>
					<!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->

					<h2 style="color: red;">
						<?php
							the_title();
						?>
					</h2>

					<?php
					// Permet d'afficher le contenu de l'article
						the_content();
					}
					// end of while
			} else {
			?>
			<p>Pas encore d'article ! :)</p>
	<?php
		}
	?>
	<!-- end of the WP_Query -->
 </div>
 <!-- fin col s12 etapes -->
</div>
<!-- fin row -->

	<?php
	// Si la page recherchée est la page garniture
	}elseif(is_page('garniture')){
	?>

	<div class="row">

	<div class="col s12 plat z-depth-3">
	 <?php
		 $requete_garniture_haut = new WP_Query('category_name=garniture_haut&posts_per_page=1');

		 if ( $requete_garniture_haut->have_posts() ) {
					 while ( $requete_garniture_haut->have_posts() ) {
					 $requete_garniture_haut->the_post();
	 ?>
					 <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->

					 <h2 style="font-size: 60px; margin: 40px">
						 <?php
							 the_title();
						 ?>
					 </h2>

					 <?php
					 // Permet d'afficher le contenu de l'article
						 the_content();
					 }
					 // end of while
			 } else {
			 ?>
			 <p>Pas encore d'article ! :)</p>
	 <?php
		 }
	 ?>
	 <!-- end of the WP_Query -->
	</div>
	<!-- fin col s12 plat -->
	</div>
	<!-- fin row -->

	<div class="row">
	 <div class="col l6 informations">
		 <?php
			 $requete_garniture_g = new WP_Query('category_name=garniture_g&posts_per_page=1');

			 if ( $requete_garniture_g->have_posts() ) {
						 while ( $requete_garniture_g->have_posts() ) {
						 $requete_garniture_g->the_post();
		 ?>
						 <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->
						 <h2 style="color: red;">
							 <?php
							 // Permet d'afficher le titre de l'article (optionnel)
								 the_title();
							 ?>
						 </h2>
						 <?php
						 // Permet d'afficher le contenu de l'article
							 the_content();
						 }
						 // end of while
				 } else {
				 ?>
				 <p>Pas encore d'article ! :)</p>
		 <?php
			 }
		 ?>
		 <!-- end of the WP_Query -->

	 </div>
	 <!-- fin col s6 informations -->

	 <div class="col l6 ingrédients">
		 <?php
			 $requete_garniture_d = new WP_Query('category_name=garniture_d&posts_per_page=1');

			 if ( $requete_garniture_d->have_posts() ) {
						 while ( $requete_garniture_d->have_posts() ) {
						 $requete_garniture_d->the_post();
		 ?>
						 <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->

						 <h2 style="color: red;">
							 <?php
								 the_title();
							 ?>
						 </h2>
						 <?php
						 // Permet d'afficher le contenu de l'article
							 the_content();
						 }
						 // end of while
				 } else {
				 ?>
				 <p>Pas encore d'article ! :)</p>
		 <?php
			 }
		 ?>
		 <!-- end of the WP_Query -->
	 </div>
	 <!-- fin col s6 ingrédients -->
	</div>
	<!-- fin row -->

	 <div class="row">
	 <div class="col l12 etapes">
		<?php
			$requete_garniture_bas = new WP_Query('category_name=garniture_bas&posts_per_page=1');

			if ( $requete_garniture_bas->have_posts() ) {
						while ( $requete_garniture_bas->have_posts() ) {
						$requete_garniture_bas->the_post();
		?>
						<!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->

						<h2 style="color: red; ">
							<?php
								the_title();
							?>
						</h2>

						<?php
						// Permet d'afficher le contenu de l'article
							the_content();
						}
						// end of while
				} else {
				?>
				<p>Pas encore d'article ! :)</p>
		<?php
			}
		?>
		<!-- end of the WP_Query -->
	 </div>
	 <!-- fin col s12 etapes -->
	</div>
	<!-- fin row -->

	<?php
	}
	?>

<?php
	// Appel du fichier footer.php
	get_footer();
?>
