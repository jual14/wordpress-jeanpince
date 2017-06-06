<?php get_header(); ?>
<section class="home-page">

	<img class="img-responsive test" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/equipe-page-teamjeanpince.jpg" alt="equipe du restaurant jean pince">
	<video poster="<?php echo get_template_directory_uri(); ?>/assets/dist/img/equipe-page-teamjeanpince.jpg" id="bgvid" playsinline autoplay loop>
	   <!--WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->-->
		<source src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/intro.mp4" type="video/webm">
	</video>
	<div id="polina">
		<button><i class="fa fa-pause-circle-o" aria-hidden="true"></i></button>
	</div>
</section>
<div class="try-video">

</div>
<div class="fix-foot">
	<?php get_template_part( 'foot' ); ?>
</div>	
<?php get_footer(); ?>
