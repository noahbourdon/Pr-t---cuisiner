<!--
Cette portion de code permet de créer du contenu différencié selon les pages de WP.

Pour l'adapter :
- Changer $requete_nom_cat pour l'adapter à chacune des catégories à afficher ;
- Dans 'category_name=slug_cat&posts_per_page=1'
    >> Remplacer slug_cat par le slug de la catégorie créée dans le Back Office de WP ;
    >> Remplacer 1 par le nombre de posts de la même catégorie à afficher.
 -->

<?php
  $requete_nom_cat = new WP_Query('category_name=slug_cat&posts_per_page=1');

  if ( $requete_nom_cat->have_posts() ) {
        while ( $requete_nom_cat->have_posts() ) {
        $requete_nom_cat->the_post();
?>
        <!-- des balises html, comme ici <h2>, peuvent encadrer le code php pour ajouter du style -->
        <h2>
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
