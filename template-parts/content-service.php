<?php
/**
 * Template part for displaying services.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deadpool
 */

?>
<li class="service col-md-6">
<div class="icon"><?php echo get_field( "icon" ) ;?></div>
<h6 class="service-name"><?php the_title(); ?></h6>
<?php the_content();?>
</li>
