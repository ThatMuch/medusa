<?php
/**
 * Template part for displaying services.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deadpool
 */

?>
<div class=" carousel-item <?php if ($ink_count == 0 ): ?> active <?php endif ?>">
   <img src="<?php echo get_template_directory_uri(); ?>/images/Rectangle3.png" alt="<?php echo get_field('icon')['alt']; ?>" class=" d-block img-fluid">
  <div class="carousel-caption d-none d-md-block">
<!--  <img src="<?php echo get_field('icon')['url']; ?>" alt="<?php echo get_field('icon')['alt']; ?>" class=" d-block img-fluid">-->
<h6 class="service-name"><?php the_title(); ?></h6>
<?php the_content();?>
  </div>

</div>
<?php echo $ink_count ;?>

