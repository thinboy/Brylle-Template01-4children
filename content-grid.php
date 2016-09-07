<?php
/**
 * The template used for displaying child page on the grid template.
 *
 * @package Explorer
 * @since Explorer 1.0
 */
?>
		<div class="grid_3 grid_item clearfix version">
			<div class="clearfix">
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php if ( '' != get_the_post_thumbnail() ) : ?>
						<div class="circleimage">
								<?php
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail();
								}
							?>
						</div>
						<?php endif; ?>
						</div>
						<?php the_excerpt(); ?>
		</div><!-- .column -->