<?php
/*
	Template Name: Club Page
*/

get_header(); ?>

<?php $thumbnail_url = wp_get_attachment_url (get_post_thumbnail_id( $post -> ID ) ); ?>



    
<div class="hero secondary-hero shift-with-hiw js-hero">
    <div class="hero__background secondary-hero__background" 
    style='background-image: url("<?php echo $thumbnail_url;?>")'></div><!-- / .hero__background -->
    
    <div class="text-center"> 
    <div class="va-container seconday-container-v va-container-h">
      <div class="va-middle">
        <div class="raise-30">
            <h2 class="text-branding text-jumbo club-name text-contrast hero__heading">
              <?php the_title(); ?>
            </h2>
            <div class="header-tagline">
                <button class="btn btn-book">Book Now</button>
            </div>
         </div><!-- / .raise-30 -->
        </div><!-- / .va-middle -->
    </div><!-- / .va-container -->
    </div><!-- /.hero__content -->
</div><!-- /.hero shift-with-hiw js-hero -->

<div class="container-fluid">
	<div class="col-md-12 main-section">
		<div class="col-md-4 sidebar"> Sidebar </div>
		<div class="col-md-7 col-md-offset-1">Main content</div>
	</div>
</div>

<?php get_footer(); ?>
