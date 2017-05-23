<div class="block">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/menu-page-ambiance.jpg" data-speed="-1" class="first-para-img img-parallax">
	<h2>Nos Rolls</h2>
</div>
<div class="container-fluid">
	<div class="row">
<?php 
$category = get_cat_name( 3 );
var_dump($category);
// $mycat = $category[0]->cat_name;
// $mycat2 = get_cat_id($mycat);
// WP_Query arguments
$args = array(
	'category_name' => 'rolls',
);

// The Query
$query_rolls = new WP_Query( $args );

// The Loop
if ( $query_rolls->have_posts() ) {
	while ( $query_rolls->have_posts() ) {
		$query_rolls->the_post(); ?>
		<div class="col-md-4">
			<div class="img-second img-responsive">
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
</div>
<section><img class="responsive absolute" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/top.png" alt="top decoration"></section>


<!--<div class="col-md-4">
			<img class="img-second img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/menu-page-rolls-crabe.jpg" alt="">
			<h3 class="brandon-font text-left">Roll de Crabe</h3>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laborum odit laboriosam, consectetur voluptatum, at, beatae vel adipisci quod eum totam sequi nemo facere dolores minus eaque omnis. Eius, quod.</div>
		</div>
		<div class="col-md-4">
			<img class="img-first img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/menu-page-rolls-crevette.jpg" alt="">
			<h3 class="brandon-font text-left">Roll de Crevette</h3>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laborum odit laboriosam, consectetur voluptatum, at, beatae vel adipisci quod eum totam sequi nemo facere dolores minus eaque omnis. Eius, quod.</div>
		</div>-->