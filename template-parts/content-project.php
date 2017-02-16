	<article class="col-md-6 project ">
	<div class="article-wrap" style="background-image:url(<?php the_post_thumbnail_url() ;?>);">
		<header class="row">
			<div class="col-12 align-self-center">
								<h5 class="title "><?php the_title(); ?></h5>
</div>
<?php
			$tags = wp_get_post_tags($post->ID);
			if ($tags):?>
<ul class="post_tags row align-self-center align-items-end">
 <?php
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
	$tag_name = $tag->name; ?>

	<li class="col">
		<?php if ($tag_name == 'design') : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/design-btn.svg" alt="<?php echo $tag_name ?>"  data-toggle="tooltip" data-placement="left" title="<?php echo $tag_name ?>">
			<?php endif ?>
			<?php if ($tag_name == 'illustration'): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/illu-btn.svg" alt="<?php echo $tag_name ?>"  data-toggle="tooltip" data-placement="left" title="<?php echo $tag_name ?>">
		<?php endif ?>
			<?php if ($tag_name == 'web'): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/code-btn.svg" alt="<?php echo $tag_name ?>"  data-toggle="tooltip" data-placement="left" title="<?php echo $tag_name ?>">
		<?php endif ?>
	</li>
<?php  } ?>
</ul>
		<?php endif ?>
	</header>
	</div>

	</article>
