= 4 Children with Love WP =

* by Anariel Design, http://www.anarieldesign.com

- this theme incorporates some part of the code from Twenty Eleven - Thirteen theme - attribution to Twenty Eleven - Twenty Thirteen theme made by the WordPress team,http://wordpress.org/themes/twentyeleven, http://wordpress.org/themes/twentythirteen
License: Distributed under the terms of the GNU GPL
Copyright: Automattic, automattic.com

4 Children with Love is distributed under the terms of the GNU GPL - read more inside license files

Update June 28 2016.
- new jquery.flexslider-min.js file inside the js folder

Update December 7 2015.
- new soliloquy slider version, few code clearings

Update September 9 2015.
1. fix for the Deprecating PHP4 style constructors in WordPress 4.3

Update August 4 2015.
1. fix for the archive.php file and removed category.php file 

Update July 10 2015.
1. fix for widget call (from WordPress 4.3) inside the widgets folder - fix for all files Use parent::__construct() instead of $this->WP_Widget().
2. small fix for the favicon icon inside the header.php and header-custom.php files

Version 1.8 - 01 July 2015.
- added new template page template-ourevents.php file to show all your events on separate page
- changes inside the: template-getinvolved.php, template-programs.php, template-contact.php, single-involvedwithus.php, single-childrenprograms.php and style.css files - fixed bug with grid layout and added feature if you don’t add widgets inside the sidebar, pages ( get involved, programs, contact and our events) will stretch to full width
- inside the includes/custom-styles.php and functions.php file added option to change color of the dark blue background elements with color value #314558
Version 1.7 - 30 October 2014.

1. 5 custom post type plugins merged into just one 4childrenplugins.zip file inside the “plugins” folder
2. new home page template - this template gives you freedom in creating the content block parts ( three columns and four columns blocks). 
New files added: - template-homesix.php
                 - sidebar-homerecentposts.php
                 - content-grid.php
3. “widgets” folder changed
4. changes inside these files: - template-getinvolved.php (content trim added)
                               - template-programs.php (content trim added)
                               - template-home.php (added <?php if     ( is_active_sidebar( 'homeintroblock' ) ) : ?>)
                               - template-homeone.php (added <?php if     ( is_active_sidebar( 'homeintroblock' ) ) : ?>)

                               - template-hometwo.php (added <?php if     ( is_active_sidebar( 'homeintroblock' ) ) : ?>)

5. small fixes inside the style.css and functions.php file

Version 1.6 - 8 October 2014.

1. inside the style.css added: 
.home_widget .soliloquy-container.soliloquy-theme-metro .soliloquy-caption .soliloquy-caption-inside h2{font-weight:bold; font-size:18px; letter-spacing:0.2em; text-align:center; color:#314558!important; text-transform: uppercase; margin-bottom: 10px; line-height: 1.6em}

Version 1.5 - 16 September 2014.

1. Small change inside the “header-custom.php” file. 
Instead of:  
<img class="headerimage" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- end headerimage -->
added this:
 <?php $header_image = get_header_image();
if ( ! empty( $header_image ) ) { ?>
<img class="headerimage" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- end headerimage -->
<?php } ?>

2. style.css => removed google font import:
/* Google Fonts Import
--------------------------------------------- */
@import url(http://fonts.googleapis.com/css?family=Lato:100, 300, 400, 700, 900, 100italic, 300italic, 400italic, 700italic, 900italic|Sintony:400, 700|Revalia|Droid+Sans:400, 700);

3. functions.php file => added enqueue of the fonts:
/**
 * Enqueue the Fonts.
 */
function anariel_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'anariel-lato', "$protocol://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Sintony:400,700|Revalia|Droid+Sans:400,700" );}
add_action( 'wp_enqueue_scripts', 'anariel_fonts' ); 



Version 1.4 - 28 July 2014.

-small fix inside “css” folder - skeleton.css file - you can change the old file with the new file

Version 1.3 - 28 May 2014.

-small changes inside style.css - fixes for left/right image alignment, tables, pre formatted text and code

- small changes inside "widgets" folder - calltoaction.php file - you can delete one of the call to action buttons, this way you can have just one or two or three buttons

- small change inside single.php file - Previous Post and Next Post buttons are moved under the post 

Version 1.2 - 28 February 2014.

-small fixes inside theme plugins folder - events.zip,faq.zip,involvedwithus.zip,our team.zip and programs.zip file - plugins are renamed

Version 1.1 - 15 January 2014.

-small change inside Widgets folder - socials.php file
-small fix inside style.css for the gradient in older IE versions

Version 1.0 - 27 November 2013.

4 Children with Love release date