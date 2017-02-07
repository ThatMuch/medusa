<?php
/**
 * Template part for displaying members.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deadpool
 */

?>


	<figure class="figure member col-md-4">
		<div class="pp">
		<ul class="social">
		<?php if(get_field("github")):;?><li class="git"><a href="<?php the_field("github") ;?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>
</a></li><?php endif;?>
		<?php if(get_field("linkedin")):;?><li class="linkedin"><a href="<?php the_field("linkedin") ;?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><?php endif;?>
		<?php if(get_field("twitter")):;?><li class="twitter"><a href="<?php the_field("twitter") ;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif;?>
		<?php if(get_field("url")):;?><li class="url"><a href="<?php the_field("url") ;?>"><i class="fa fa-external-link" aria-hidden="true"></i>
</a></li><?php endif;?>
	</ul>
		<p class="name align-middle mb-0"><?php the_title(); ?></p>
		<img src="<?php the_post_thumbnail_url() ;?>" alt="<?php the_title(); ?>" class="rounded-circle ">
		</div>
		<figcaption class="figure-caption role"><h5><?php the_field("role") ;?></h5><figcaption class="figure-caption">
	</figure>
