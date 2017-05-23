<div class="block">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/menu-page-ambiance.jpg" data-speed="-1" class="img-parallax">
	<h2>Nos Pieces Entieres</h2>
</div>
<div class="container-fluid">
	<div class="row">
		<?php query_posts('cat=6'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
		<div class="col-md-4">
			<div class="img-second img-responsive">
				<?php the_post_thumbnail(); ?>
			</div>
			<h3 class="brandon-font text-left"><?php the_title(); ?></h3>
			<div><?php the_content(); ?></div>
		</div>
        

<?php endwhile; endif; ?>
	</div>
</div>
<section><img class="responsive absolute" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/top.png" alt="top decoration"></section>