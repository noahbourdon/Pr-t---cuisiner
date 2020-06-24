<!--
Cette portion de code permet de créer du contenu différencié selon les pages de WP.

Pour l'adapter :
- Changer le nom des pages en accord avec celles  créées dans le Back Office de WP ;
- Remplacer les paragraphes par le contenu souhaité.
 -->
<?php
// Si la page demandée est la page bienvenue
	if(is_page('bienvenue')){
?>
	<p>
		Contenu html de la page bienvenue
	</p>
<?php
// Si la page demandée est la page produit
}elseif(is_page('produit')){
?>
	<p>
		Contenu html de la page produit
	</p>
<?php
}else{
?>
	<p>
		Contenu html de la page bienvenue
	</p>
<?php
}
?>
