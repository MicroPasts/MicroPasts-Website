<?php get_header(); ?>

<div class="wrap">
<div class="container">
   <div class="top-container"></div>

   <div class="row jumbotron">
      <!-- <div class="col-md-12 mainpage">
         <p><h1>MicroPasts</h1></p>
         <p><h3>A community platform for conducting, designing and funding research into our human past.</h3></p>   
         <img src="http://micropasts.org/wp-content/uploads/2014/05/figurines_800px.png" class="figurines">       
      </div>
   </div>

   <div class="row jumbotron-transparent">
      <div class="jumbotron-small col-md-4">
         <h3>Research you do</h3>
         <p>Help existing research projects to create open data and build new knowledge via crowd-sourcing applications.</p>
         <p><a class="btn btn-primary" href="http://crowdsourced.micropasts.org/">View details <i class="fa fa-chevron-right"></i></a></p>
      </div>
      <div class="jumbotron-small col-md-4">
         <h3>Research you fund</h3>
         <p>Choose among new proposals for research and help to crowd-fund them.</p>     
         <p><a class="btn btn-primary" href="https://crowdfunded.micropasts.org/">View details <i class="fa fa-chevron-right"></i></a></p>
      </div>
      <div class="jumbotron-small col-md-4">
         <h3>Discuss and design</h3>
         <p>Discuss existing research projects or design new ones on our community forum.</p>
         <p><a class="btn btn-primary" href="http://community.micropasts.org/">View details <i class="fa fa-chevron-right"></i></a></p>
      </div> -->
      
      <?php
$postlist = get_posts( 'orderby=menu_order&sort_order=asc' );
$posts = array();
foreach ( $postlist as $post ) {
   $posts[] += $post->ID;
}

$current = array_search( get_the_ID(), $posts );
$prevID = $posts[$current-1];
$nextID = $posts[$current+1];
?>

<div class="navigation">
<?php if ( !empty( $prevID ) ): ?>
<div class="alignleft">
<a href="<?php echo get_permalink( $prevID ); ?>"
  title="<?php echo get_the_title( $prevID ); ?>">Previous</a>
</div>
<?php endif;
if ( !empty( $nextID ) ): ?>
<div class="alignright">
<a href="<?php echo get_permalink( $nextID ); ?>" 
 title="<?php echo get_the_title( $nextID ); ?>">Next</a>
</div>
<?php endif; ?>
</div><!-- .navigation -->
   </div>

</div>
<div class="home-push"></div>
</div>

<?php get_footer(); ?>
