<?php
/**
 * Template Name: Home Six
 *
 */

get_header(); ?>

<!-- Slider ==================================================
================================================== -->
<section class="slider">
	<?php get_sidebar( 'mainslider' ); ?>
</section>
<!-- slider ends here -->
<!-- Intro ==================================================
================================================== -->

<div class="homejoinnow introblock">
	<div class="container">
		<?php get_sidebar( 'homeintroblock' ); ?>
	</div>
	<!-- container ends here -->
</div>
<!-- introblock ends here -->

<!--Our Program ==================================================
================================================== -->
<div class="programblock">
	<div class="container homesix program">
			<?php
			$child_pages = new WP_Query( array(
				'post_type'      => 'page',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'post_parent'    => $post->ID,
				'posts_per_page' => 3,
				'no_found_rows'  => true,
			) );
			while ( $child_pages->have_posts() ) : $child_pages->the_post();
				 get_template_part( 'content', 'grid' );
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<!-- end container -->
</div>
<!-- end programblock -->

<!-- News ==================================================
================================================== -->
<?php if ( is_active_sidebar( 'homerecentpost' ) ) : ?>
<div class="newsblock">
	<div class="container news">
		<div class="latestpost">
		<div class="clearfix">
		 <?php get_sidebar( 'homerecentpost' ); ?>
		</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php get_footer(); ?>