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

<section id="about" class="container">
	<h3>Qui sommes nous ?</h3>
	<?php the_field('description', 'option'); ?>
</section>
<section id="services" class="container">
	<h3>Nos services</h3>

					<?php $services = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 9, ) ); ?>
						<?php if ( $services->have_posts() ) : ?>
							<?php /* The loop */ $ink_count = 0; $ink_row_count=0 ;?>
							<?php	while ( $services->have_posts() ) : $services->the_post();
					if ($ink_count == 0 ) : ?>
								<ul class='row-<?php echo $ink_row_count ;?> row'>

					<?php endif;?>
					<?php get_template_part( 'template-parts/content','service' ); ?>
					<?php if ($ink_count == 2 )
										{
											echo "</ul>";
											$ink_count=0;
											$ink_row_count++;
										}
									else {
										$ink_count++;
									}
					$i++;
					endwhile;?>
									<?php endif; ?>

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
<section id="portfolio" class="container">
	<article class="col-md-6">
		<h5 class="title"></h5>
		<ul>
			<li></li>
			<li></li>
			<button>+</button>
		</ul>
	</article>
</section>
<section id="contact" class="container">
<div class="row">
		<div class="col-md-6">
		<h3>Nous contacter</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maxime architecto, voluptas rerum sed eos animi tempora nobis eveniet deleniti laborum fuga, fugiat, reprehenderit distinctio molestias sequi dolores quis iusto.</p>
	<ul class="col-12 social nav align-self-center justify-content-center">
		<?php if(get_field("github", 'option')):;?><li class="git nav-item "><a href="<?php the_field("github", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>
</a></li><?php endif;?>
		<?php if(get_field("linkedin", 'option')):;?><li class="linkedin nav-item"><a href="<?php the_field("linkedin", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><?php endif;?>
		<?php if(get_field("pinterest", 'option')):;?><li class="pinterest nav-item"><a href="<?php the_field("pinterest", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i>
</a></li><?php endif;?>
	</ul>

	</div>
	<div class="col-md-6 form">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Formulaire') ) ?>
	</div>
</div>

</section>
<?php
get_footer();
