

<?php
/*
    Template Name: Front Page
*/
?>
<?php get_header(); ?>


    <!-- MAIN CONTENT-->

 
<div class="hero shift-with-hiw js-hero">
  <div class="hero__background">
    <!-- <div id="mutedYoutubePlayer" ></div> -->
       
       <video muted id="pretzel-video" loop="loop" preload="auto" class="video-playing" controls>
          <source type="video/mp4" src="wp-content/themes/insydo/img/videos/dubai_sports.mp4"></source>
        </video>
        
        
    <div class="hero__background_experiment js-hero-background hide"></div>
  </div>
 

      

<!-- Text Container -->

<div class="hero__content page-container page-container-full text-center">
    <div class="va-container va-container-v va-container-h">
      <div class="va-middle">
        <div class="raise-30">
            <h2 class="text-branding text-jumbo text-contrast hero__heading">
              <?php bloginfo('name'); ?>
            </h2>
            <div class="header-tagline">
                <?php bloginfo('description'); ?>
            </div>
            <div id="controls">
                <div id="start"><i class="fa fa-play-circle"></i></div>
            </div>
         </div><!-- / .raise-30 -->
        </div><!-- / .va-middle -->
    </div><!-- / .va-container -->
           
    <div class="hero__content-footer col-md-12 hide-sm">
      <div class="col-md-4 col-md-offset-8">
        <p class="video-credit">Video Credit <span class="video-uploader">   Jean Claude Duss </span> @Extreme Wake</p>
      </div><!-- / .col-md-4 .col-md-offset-8 -->
      <div class="chevron"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></div>
    </div><!-- /.hero__content-footer -->
</div><!-- /.hero__content -->
</div><!-- /.hero shift-with-hiw js-hero -->
        
   
<!-- Main Section -->       
<div class="new-section container clearfix">       
<h3 class="text-center section-title">Discover the Sports clubs in Town on our interactive map</h3>
<div id="category-section">
    <div class="col-md-4 kiteSurfingCat category-filters">
            <div class="cat-name"><h3><a href="#">KITE SURFING</a></h3></div> 
    </div>
    
    <div class="col-md-4 rockclimbingCat category-filters">
        <div class="cat-name"><a href="#"><h3>ROCK CLIMBING</h3></a></div> 
    </div>
     
    <div class="col-md-4 wakeboardingCat category-filters">
        <div class="cat-name"><a href="#"><h3>WAKE BOARDING</h3></a></div> 
    </div>
    
</div><!-- / .category-filters -->


<div class="container-fluid map-section col-md-12">
     <?php echo do_shortcode('[put_wpgm id=2]'); ?>
</div><!-- /.map-section -->       

</div>
 
 
        
<!-- VIDEOS SECTION -->
       
 <!-- <section id="videos" class="clearfix">
    <div class="container">
       <div class="section-title"><h3 class="text-center">Videos uploaded by community</h3></div>
        <div class="video-list">
            <ul id="results">
                    LIST OF YOUTUBE VIDEOS GO HERE AS LIST ELEMENT FROM API -->
            <!--</ul>
        </div>
    </div>
</section>   -->   
        
<?php get_footer(); ?>


