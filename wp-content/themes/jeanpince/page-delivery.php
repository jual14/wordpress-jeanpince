<?php
/*
 Template Name: Page Livraison
*/
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img class="delivery-img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/source.gif" alt="">
        </div>
        <div class="col-sm-6">
            <a class="delivery-img delivery-foodora" href="https://www.ubereats.com/bordeaux/food-delivery/jean-pince/xZrEYqQRTu-dwUD4-9DKGQ/">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/foodora-logo.png" alt="">
            </a>
        </div>
        <div class="col-sm-6">
            <a class="delivery-img delivery-ubereats" href="https://www.ubereats.com/bordeaux/food-delivery/jean-pince/xZrEYqQRTu-dwUD4-9DKGQ/">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ubereats-logo.png" alt="">
            </a>
        </div>
    </div>
</div>
<div class="fix-foot">
<?php get_template_part( 'foot' ); ?>
</div>
<?php
get_footer();

?>