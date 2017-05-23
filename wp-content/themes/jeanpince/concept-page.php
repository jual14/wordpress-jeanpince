<?php
/*
 Template Name: Page Concept
*/
?>

<?php get_header(); ?>

	<div class="container under-nav">
	<div>
		<h2 class="text-center"><a href="">Notre Histoire</a></h2>
	</div>
	<div>
		<h2 class="text-center"><a href="#product" class="scrollTo">Nos Produits</a></h2>
	</div>
</div>

<div class="block">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/notrehistoiretest.jpg" data-speed="-1" class="img-parallax img-para-concept">
	<h2>Notre Histoire</h2>
	<h3><a href="https://www.youtube.com/watch?v=9iulTjJadHc">En Savoir Plus</a></h3>
</div>
<div class="concept-container">
	<div class="content-concept">
		<h3>- J’EN PINCE POUR QUI ?</h3> 
 		<div class="text-justify">
	 		Jean Pince c’est avant tout une histoire d’amitié.</br> 
			L’histoire de quatre copains férus de gastronomie qui ont parcouru pas mal de pays &amp; qui rêvaient d’avoir un endroit original, convivial &amp; unique. 
			De là est né Jean Pince, une seafood cantine s’inspirant des restaurants de fruits de mer de la côte nord américaine. L’aventure se concrétise &amp; le restaurant ouvre ses portes à Bordeaux, le 7 Octobre 2016.
		</div>
		<h3>- J’EN PINCE POUR QUOI ?</h3> 
		<div class="text-justify">
			<span class="text-center">NOTRE CONCEPT : FINI LE HOMARD HORS DE PRIX !</span></br></br>
			Jean Pince a pour but : </br>
			- De faire découvrir le homard sous toutes ses formes</br>
			- Au plus grand nombre d'entre vous</br>
			- Dans le respect de la qualité du produit</br>
			- Le tout à un prix abordable.</br>
			Nous voulons vous redonner envie de bien manger et de (re)découvrir le plaisir des produits de la mer.
		</div>
	</div>
</div>
<section><img class="responsive absolute" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/top.png" alt="top decoration"></section>

<div class="block">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/NOSPRODUITS.png" data-speed="-1" class="first-para-img img-parallax">
	<h2>Nos Produits</h2>
</div>
<div id="product" class="concept-container">
	<div class="content-concept">
		<h3>Nos Produits</h3> 
		<div class="text-justify">
		Nous avons la passion du goût et des produits, et nous accordons une très grande importance au caractère unique et à la provenance de ce que nous servons. </br>
		Ainsi, nous vous proposons une carte simple autour de nos trois produits phares : le homard, la crevette et le crabe !
		(&amp; nous avons aussi pensé à ceux qui ne mangent pas de fruits de mer avec un délicieux faux filet d'une viande charolaise maturée ! )</br>
		Tous nos homards sont importés du Canada où nous travaillons avec des fournisseurs jeunes et ambitieux. Ici en Gironde, que ce soit pour le vin, le pain et tous les produits frais, nous privilégions le travail de producteurs &amp; d’artisans locaux.
		</div>
	</div>
</div>
<section><img class="responsive absolute" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/top.png" alt="top decoration"></section>

<?php

get_footer();

?>