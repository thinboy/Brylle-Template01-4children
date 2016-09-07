<?php
/**
 * Template Name: Contact Page
 *
 */

get_header(); ?>
<?php if ( is_active_sidebar( 'contact' ) ) : ?>
<div class="contact">
<div class="container content">
<div class="two_third">
	<?php the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
</div>
<aside>
<div class="one_third lastcolumn contactsidebar">
	 <?php get_sidebar( 'contact' ); ?>
</div>
</aside>
</div>
<!-- end container -->
</div>
<?php else: ?>
<div class="contact">
<div class="container content">
	<?php the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
</div>
<!-- end container -->
</div>
<?php endif; ?>
<?php get_footer(); ?>