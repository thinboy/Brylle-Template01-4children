<?php
/**
 * Template Name: Our Events Page
 *
 */

get_header(); ?>

<div class="container content page">
	<?php the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
</div>

<?php
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
$taxonomy     = 'ourevents_cat';
$orderby      = 'name';
$show_count   = 0;			// 1 for yes, 0 for no
$pad_counts   = 0;			// 1 for yes, 0 for no
$hierarchical = 1;			// 1 for yes, 0 for no
$title        = '';

$args = array(
	'taxonomy'     => $taxonomy,
	'orderby'      => $orderby,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title
);
?>
<?php
// query args
$query = array(
'post_type' => 'ourevents',
'posts_per_page' => 99999,
'paged' => ( get_query_var('paged') ? get_query_var('paged') : true )
);
// query
query_posts( $query );

global $more;
$more = 0;
?>

<!-- Menu Content Part - Menu Items ==================================================
================================================== -->
<?php if ( is_active_sidebar( 'getinvolved' ) ) : ?>
<div class="container programspage">
	<div class="two_third program involved">
	<div class="gridcolumns clearfix">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div class="gridcolumn clearfix">
			<article> <a href="<?php the_permalink() ?>">
				<h3 class="involvedtitle">
					<?php the_title(); ?>
				</h3>
				</a> <a href="<?php the_permalink() ?>">
				<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		}
			 ?>
				</a>
				<div class="getinvolved">
					<p><?php echo custom_trim_words( get_the_content(), 15 ); ?></p>
				</div>
			</article>
		</div>
		<?php endwhile; else: ?>
		<br>
		<h4>
			<?php _e('Woops...', 'anariel') ?>
		</h4>
		<p>
			<?php _e('Sorry, no posts were found.', 'anariel') ?>
		</p>
		<?php endif; ?>
		</div>
		<!-- grid ends here -->
	</div>
	<aside>
		<div class="one_third lastcolumn sidebar">
			<div class="sidebarinner">
				<?php get_sidebar( 'getinvolved' ); ?>
			</div>
		</div>
	</aside>
</div>
<!--end container-->
<?php else: ?>
<div class="container programspage">
	<div class="program involved">
	<div class="gridcolumns clearfix">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div class="gridcolumn clearfix">
			<article> <a href="<?php the_permalink() ?>">
				<h3 class="involvedtitle">
					<?php the_title(); ?>
				</h3>
				</a> <a href="<?php the_permalink() ?>">
				<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		}
			 ?>
				</a>
				<div class="getinvolved">
					<p><?php echo custom_trim_words( get_the_content(), 15 ); ?></p>
				</div>
			</article>
		</div>
		<?php endwhile; else: ?>
		<br>
		<h4>
			<?php _e('Woops...', 'anariel') ?>
		</h4>
		<p>
			<?php _e('Sorry, no posts were found.', 'anariel') ?>
		</p>
		<?php endif; ?>
		</div>
		<!-- grid ends here -->
	</div>
</div>
<!--end container-->
<?php endif; ?>
<?php get_footer(); ?>