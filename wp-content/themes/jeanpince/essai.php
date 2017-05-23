<div class="block">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/menu-page-ambiance.jpg" data-speed="-1" class="first-para-img img-parallax">
	<h2>Nos Rolls</h2>
</div>

<?php 
// WP_Query arguments
$args = array('category_name' => 'rolls',
);

// The Query
$query_rolls = new WP_Query( $args );

// The Loop
if ( $query_rolls->have_posts() ) {
	while ( $query_rolls->have_posts() ) {
		$query_rolls->the_post(); ?>
		
        <div class="post">
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-info">
        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
      </p>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>

<?php	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>



<!--<div>
<?php if (have_posts()) : ?>
  <p class="title">
    Hey ! Il y a des Posts !
  </p>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-info">
        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
      </p>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
</div>-->