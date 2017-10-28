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
      
      <article>

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>
   </div>

</div>
<div class="home-push"></div>
</div>

<?php get_footer(); ?>
