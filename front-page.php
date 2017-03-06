<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package medusa
 */

get_header(); ?>

	<?php $services = new WP_Query( array( 'post_type' => 'services' ) ); ?>
					<?php if ( $services->have_posts() ) : ?>
					<section id="services" class="container">
					<h3 class="text-center section-title">Nos services</h3>
					<div class="row align-items-center">
							
					<?php $ink_count = 0; ?>
						<?php	while ( $services->have_posts() ) : $services->the_post();?>
						
  <div class="col service">
  <img src="<?php echo get_field('icon')['url']; ?>" alt="<?php echo get_field('icon')['alt']; ?>" class="icon">
<h6 class="service-name"><?php the_title(); ?></h6>
<?php the_content();?>
							<?php $ink_count++ ;?>
</div>
						<?php	endwhile;?>
					<?php endif; ?>
</div>
					

</section>
<section id="team">
<img class="top-header" src="<?php echo get_template_directory_uri(); ?>/images/top.svg" alt="">
<div class="container">
	<?php $services = new WP_Query( array( 'post_type' => 'equipe', 'posts_per_page' => 9, ) ); ?>
						<?php if ( $services->have_posts() ) : ?>
							<?php /* The loop */ $ink_count = 0; $ink_row_count=0 ;?>
							<?php	while ( $services->have_posts() ) : $services->the_post();
					if ($ink_count == 0 ) : ?>
								<div class='row-<?php echo $ink_row_count ;?> row'>

					<?php endif;?>
					<?php get_template_part( 'template-parts/content','membre' ); ?>
					<?php if ($ink_count == 2 )
										{
											echo "</div>";
											$ink_count=0;
											$ink_row_count++;
										}
									else {
										$ink_count++;
									}
					$i++;
					endwhile;?>
									<?php endif; ?>
</div>
<img class="bottom-header" src="<?php echo get_template_directory_uri(); ?>/images/bottom.svg" alt="">
</section>
<section id="portfolio">
<h3 class="text-center section-title">Nos réalisations</h3>
<div class="container">
<?php $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 6, ) ); ?>
						<?php if ( $portfolio->have_posts() ) : ?>
							<?php /* The loop */ $ink_count = 0; $ink_row_count=0 ;?>
							<?php	while ( $portfolio->have_posts() ) : $portfolio->the_post();
					if ($ink_count == 0 ) : ?>
								<div class='row-<?php echo $ink_row_count ;?> row'>

					<?php endif;?>
					<?php get_template_part( 'template-parts/content','project' ); ?>
					<?php if ($ink_count == 1 )
										{
											echo "</div>";
											$ink_count=0;
											$ink_row_count++;
										}
									else {
										$ink_count++;
									}
					$i++;
					endwhile;?>
									<?php endif; ?>
</div>
<!--
<div class="load-more" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bottom.svg)">
	</br>
	</br>
	</br>
	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/more.svg" alt="plus" width="40px" height="40px" class="btn-more "></a>
</div>
-->

</section>

<section id="contact" class="container">


		<h3 class="section-title">Nous contacter</h3>
		<p>Vous avez un projet ? Nous sommes à votre écoute pour vous conseiller dans votre processus de création.</p>

		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Formulaire') ) ?>

	<ul class="col-12 social nav align-self-center justify-content-center">
		<?php if(get_field("github", 'option')):;?><li class="git nav-item "><a href="<?php the_field("github", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>
</a></li><?php endif;?>
		<?php if(get_field("linkedin", 'option')):;?><li class="linkedin nav-item"><a href="<?php the_field("linkedin", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><?php endif;?>
		<?php if(get_field("pinterest", 'option')):;?><li class="pinterest nav-item"><a href="<?php the_field("pinterest", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i>
</a></li><?php endif;?>
	</ul>
</section>
<?php
get_footer();
