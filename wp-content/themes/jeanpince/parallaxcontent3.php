<div class="block">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/menu-page-ambiance.jpg" data-speed="-1" class="first-para-img img-parallax">
	<h2>Nos Pieces entieres</h2>
</div>
<div class="container-fluid">
	<div class="row">
<?php 
// WP_Query arguments
$args = array(
	'category_name' => 'pieces-entieres',
);

// The Query
$query_rolls = new WP_Query( $args );

// The Loop
if ( $query_rolls->have_posts() ) {
	while ( $query_rolls->have_posts() ) {
		$query_rolls->the_post(); ?>
		<div class="col-md-4">
			<div class="img-first img-responsive">
				<?php the_post_thumbnail(); ?>
			</div>
			<h3 class="brandon-font text-left"><?php the_title(); ?></h3>
			<div><?php the_content(); ?></div>
		</div>
        

<?php	}
} else {
	// no posts found
}
// Restore original Post Data
wp_reset_postdata();
?>
	</div>
	<p class="text-center italic">Accompagnements : frites maison et/ou salade jeunes pousses.</p>
</div>
<section><img class="responsive absolute" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/top.png" alt="top decoration"></section>