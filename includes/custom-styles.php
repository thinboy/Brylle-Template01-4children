<?php
	$content_link_color = get_option('content_link_color');
	$content_bluebg_color = get_option('content_bluebg_color');
?>
<style>
a, span.orange, form#commentform span.required, #mainnav ul li a:hover::before, #mainnav ul li a:focus::before, form#commentform span.required { color:  <?php echo $content_link_color; ?>; }
.woocommerce .star-rating, .woocommerce form .form-row .required, .woocommerce-page form .form-row .required { color:  <?php echo $content_link_color; ?>!important; }
.woocommerce-error { border-top-color:  <?php echo $content_link_color; ?>!important; }
#secondary-slider a.more-link, .searchsubmit, .contact-form input[type="submit"], #secondary-slider a.more-link, .searchsubmit, .contact-form input[type="submit"], .home_widget .soliloquy-caption a  { background:  <?php echo $content_link_color; ?>;}
a.donate, #calltoaction .donate { background-color:  <?php echo $content_link_color; ?>;}
.form-errors .form-error-message, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce-error:before { background:  <?php echo $content_link_color; ?>!important;}

a.buttonhome1, #title, #mainnav ul ul, .home_widget .soliloquy-container.soliloquy-theme-metro .soliloquy-caption .soliloquy-caption-inside p, .caption p, #secondary-slider ul.slides h3, .blog-post-date, #footerblock, .ourevents img, .ourevents p.meta, .nav-previous a, .nav-next a, .newsarticles p.meta, .contact-form, .woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3, table.shop_table th, table.shop_table th, .team h3 { background:  <?php echo $content_bluebg_color; ?>;}
.menu-toggle { background-color:  <?php echo $content_bluebg_color; ?>;}
.sidebarinner h3 { border-left-color:  <?php echo $content_bluebg_color; ?>;}
.sidebarinner ul li { border-bottom-color:  <?php echo $content_bluebg_color; ?>;}
h3.involvedtitle, .woocommerce-message:before, .woocommerce-info:before, .gridlist-toggle a.active { background:  <?php echo $content_bluebg_color; ?>!important;}
.woocommerce-message, .woocommerce-info { border-top-color:  <?php echo $content_bluebg_color; ?>!important;}
.gridlist-toggle a#grid { border-right-color:  <?php echo $content_bluebg_color; ?>!important;}
</style>