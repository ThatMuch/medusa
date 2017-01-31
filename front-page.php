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

<section id="about">
	<h3>Qui sommes nous ?</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa beatae dolorum, culpa libero quos neque, inventore delectus, dignissimos cupiditate repudiandae vel vero expedita error odit odio, voluptatibus eius natus totam.</p>
</section>
<section id="services">
	<h3>Nos services</h3>
	<ul>
		<li>
			<h4>1</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit itaque ipsa ducimus deleniti perspiciatis est quae rerum. Animi excepturi, maxime? Nobis necessitatibus nisi, adipisci. Fugiat ipsam at officia magni minus!</p>
		</li>
		<li>
			<h4>2</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit itaque ipsa ducimus deleniti perspiciatis est quae rerum. Animi excepturi, maxime? Nobis necessitatibus nisi, adipisci. Fugiat ipsam at officia magni minus!</p>
		</li>
	</ul>
</section>
<section id="team">
	<ul>
		<li>
			<ul class="social">
				<li class="git"></li>
				<li class="linkedin"></li>
				<li class="twitter"></li>
			</ul>
			<div class="pp">
				<p class="name">Prenom Nom</p>
			</div>
			<h5 class="role">1</h5>
		</li>
		<li>
			<ul class="social">
				<li class="git"></li>
				<li class="linkedin"></li>
				<li class="twitter"></li>
			</ul>
			<div class="pp">
				<p class="name">Prenom Nom</p>
			</div>
			<h5 class="role">2</h5>
		</li>
		<li>
			<ul class="social">
				<li class="git"></li>
				<li class="linkedin"></li>
				<li class="twitter"></li>
			</ul>
			<div class="pp">
				<p class="name">Prenom Nom</p>
			</div>
			<h5 class="role">3</h5>
		</li>
	</ul>
</section>
<section id="portfolio">
	<article class="col-md-6">
		<h5 class="title"></h5>
		<ul>
			<li></li>
			<li></li>
			<button></button>
		</ul>
	</article>
</section>
<section id="contact">
	<div class="col-md-6">
		<h3>Nous contacter</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maxime architecto, voluptas rerum sed eos animi tempora nobis eveniet deleniti laborum fuga, fugiat, reprehenderit distinctio molestias sequi dolores quis iusto.</p>
			<ul>
				<li class="git"></li>
				<li class="linkedin"></li>
				<li class="pinterest"></li>
			</ul>

	</div>
	<div class="col-md-6 form">
		<form action=""></form>
	</div>
</section>
<?php
get_footer();
