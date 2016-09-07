<?php
/*-----------------------------------------------------------------------------------

	Name: Anariel Home Recent Posts Widget
	Description: Home Widget - Recent Posts

-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Custom Widget: Front Page Four Columns Recent Posts
/*-----------------------------------------------------------------------------------*/
add_action('widgets_init', 'anariel_fourcolumn_recentposts');
function anariel_fourcolumn_recentposts() {
	register_widget('anariel_fourcolumn_recentposts');
}
class anariel_fourcolumn_recentposts extends WP_Widget {
	function __construct() {
		$widget_ops = array('description' => __( '4 Column Recent Posts Widget with Featured Image.', 'anariel') );
		parent::__construct(false, __('Anariel Home Page Six: 4 Column Recent Posts', 'anariel'),$widget_ops);
	}
	function widget($args, $instance) {
		$title = apply_filters('widget_title', $instance['title'] );
		$postnumber = $instance['postnumber'];
		$category = apply_filters('widget_title', $instance['category']);
		echo $args['before_widget']; ?>
		<?php if( ! empty( $title ) )
			echo '<div class="widget-title-wrap"><h3 class="widget-title"><span>'. esc_html($title) .'</span></h3></div>'; ?>
<?php
// The Query
$recent_query = new WP_Query(array (
		'post_status'	=> 'publish',
		'posts_per_page' => $postnumber,
		'ignore_sticky_posts' => 1,
		'category_name' => $category,
	) );
?>
<?php
// The Loop
if($recent_query->have_posts()) : ?>
<?php while($recent_query->have_posts()) : $recent_query->the_post() ?>
<div class="grid_4 grid_item clearfix version post">
		<article>
			<div class="blog-post-inner">
			<div class="blog-post-thumb"> <a href="<?php the_permalink() ?>">
				<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
		}
?>
				</a></div>
			<!-- .blog-post-thumb -->
		<div class="blog-post-main">
				<h2 class="blog-post-title"><a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
				</a></h2>
				<div class="blog-post-date-home">
				<?php the_time('F jS, Y') ?>
				</div>
				<div class="blog-post-excerpt">
				<?php global $more;
				$more = 0; ?>
				<?php the_content(__('More', 'anariel')); ?>
				</div>
				<!-- .blog-post-excerpt -->
				<div class="blog-post-category"> Posted In:
				<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'anariel' ), $category->name ) ) . '">'.$category->cat_name.'</a> /'.$separator;
	}
echo trim($output, $separator);
}
?>
				</div>
				<!-- .blog-post-category -->
			</div>
			<!-- .blog-post-main -->
			</div>
		</article>
		</div>
<?php endwhile ?>
<?php endif ?>
	<?php
	echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
	wp_reset_postdata();
	}
function update($new_instance, $old_instance) {
		$instance['title'] = $new_instance['title'];
		$instance['postnumber'] = $new_instance['postnumber'];
		$instance['category'] = $new_instance['category'];
	return $new_instance;
}
function form($instance) {
		$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$postnumber = isset( $instance['postnumber'] ) ? esc_attr( $instance['postnumber'] ) : '';
		$category = isset( $instance['category'] ) ? esc_attr( $instance['category'] ) : '';
	?>
	<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','anariel'); ?></label>
		<input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" /></p>
	<p><label for="<?php echo $this->get_field_id('postnumber'); ?>"><?php _e('Number of posts to show:','anariel'); ?></label>
		<input type="text" name="<?php echo $this->get_field_name('postnumber'); ?>" value="<?php echo esc_attr($postnumber); ?>" class="widefat" id="<?php echo $this->get_field_id('postnumber'); ?>" /></p>
	<p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category slug (optional, separate multiple categories by comma):','anariel'); ?></label>
	<input type="text" name="<?php echo $this->get_field_name('category'); ?>" value="<?php echo esc_attr($category); ?>" class="widefat" id="<?php echo $this->get_field_id('category'); ?>" /></p>
	<?php
	}
}