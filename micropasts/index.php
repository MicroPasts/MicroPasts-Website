<?php get_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>

   <?php endwhile; else: ?>

<div class="wrap">
<div class="top-container"></div>
<div class="container jumbotron-page">

   <h2>Error 404: Page Not Found</h2>
   <p>&nbsp;</p>
   <p>Something went wrong!</p>
   <ul>
      <li>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</li>
      <li>You may have mistyped the address</li>
      <li>Your bookmark may be out of date</li>
      <li>You may have clicked on an expired link</li>
   </ul>

</div>
<div class="push"></div>
</div>

   <?php endif; ?>

<?php get_footer(); ?>