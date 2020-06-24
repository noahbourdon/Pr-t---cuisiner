<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>
    <?php bloginfo('Assiette méditerranéenne'); ?>
  </title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Staatliches&display=swap" rel="stylesheet">

  <!-- Liaison vers materialize.min.css : remplacer XXXXX par le chemin d'accès depuis la racine du serveur et mon_theme_enfant par le nom du thème enfant-->
  <link rel="stylesheet" href="/wp_recette/wp-content/themes/theme_bourdon/materialize/css/materialize.min.css">

  <!-- On relie la feuille de style style.css en utilisant la fonction php de WP bloginfo -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">


<?php wp_head() ?>
<!-- Grâce à cette function on peut utiliser des blocs de mise en page et des styles directement en BO (Back-office), malheureusement c'est nocif pour la navbar qui prends considérablement un coup et je ne comprends pas pourquoi cela se passe-->

</head>
<body>


  <div class="row ">
    <div class="col l6" style=" margin-left: 50px">
        <img src="/wp_recette/wp-content/themes/theme_bourdon/img/marabout-logo-header.png" alt="Editions Marabout">

    </div>

    <div class="col l5" style="margin-top: 20px; margin-left: 50px">
      <ul id="header-marabout" style="list-style-type:none;">
        <li style="float: left; position:relative; padding-right:5px;"><a href="https://www.facebook.com/editionsmarabout?fref=ts" target="_blank" title="Facebook - Marabout"><img alt="facebook" src="/wp_recette/wp-content/themes/theme_bourdon/img/fb-header.png"></a></li>
        <li style="float: left; position:relative; padding-right:5px;"><a href="https://twitter.com/EditionMarabout" target="_blank" title="Twitter - Marabout"><img alt="twitter" src="/wp_recette/wp-content/themes/theme_bourdon/img/tw-header.png"></a></li>
        <li style="float: left; position:relative; padding-right:5px;"><a href="https://instagram.com/maraboutcuisine/" target="_blank" title="Instagram - Marabout"><img alt="instagram" src="/wp_recette/wp-content/themes/theme_bourdon/img/instagram-header.png"></a></li>
        <li style="float: left; position:relative; padding-right:5px;"><a href="https://fr.pinterest.com/maraboutcuisine/" target="_blank" title="Pinterest - Marabout"><img alt="pinterest" src="/wp_recette/wp-content/themes/theme_bourdon/img/pinterest-header.png"></a></li>
        <li style="float: left; position:relative; padding-right:5px;"><a href="https://www.youtube.com/user/MaraboutCuisine" target="_blank" title="Youtube - Marabout"><img alt="youtube" src="/wp_recette/wp-content/themes/theme_bourdon/img/youtube-header.png"></a></li>
      </ul>

    </div>
  </div>
  <!-- fin de row, ici nous avons du copier coller du header de chez Marabout -->


  <nav class="lime darken-1" style="font-weight: bold">
    <?php wp_nav_menu() ?>
  </nav>
  <!-- Alors par ici nous commençons avec une entrée couleur olive qui se marie avec le plat choisi -->

<!-- Début de la div principale -->
  <div id="conteneur_principal" class="z-depth-2">
