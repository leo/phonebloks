<?php

	/*
		Template Name: Development
	*/

	get_header();

?>

<section class="title big">

	<div class="inner">
		<p><?php the_field( 'subtitle' ) ?></p>
		<h1><?php the_field( 'info' ) ?></h1>
	</div>

</section>

<section class="concepts">
	<div class="inner">

		<?php while ( have_rows( 'phones' ) ) : the_row(); ?>
		
		<div class="item">
			<div class="centring">

				<img src="<?php the_sub_field( 'icon' ) ?>">
				<span><?php the_sub_field( 'name' ) ?></span>

				<div>
					<img src="<?php the_sub_field( 'cover' ) ?>">
					<p><?php the_sub_field( 'description' ) ?></p>
				</div>

			</div>
		</div>

		<?php endwhile; ?>

	</div>
</section>

<section class="friends">

	<div class="inner">
		<h1><?php the_field( 'friends_heading' ) ?></h1>
		<h2><?php the_field( 'friends_description' ) ?></h2>
	</div>

	<div class="inner">

		<?php while ( have_rows( 'friends_logos' ) ) : the_row(); ?>

		<div class="item">
			<div class="centring">

				<img src="<?php the_sub_field( 'icon' ) ?>">

				<div>
					<img src="<?php the_sub_field( 'cover' ) ?>">
					<p><?php the_sub_field( 'description' ) ?></p>
				</div>

			</div>
		</div>

		<?php endwhile; ?>

	</div>

</section>

<section class="elevator skyline">

	<div class="inner">
		<h1><?php the_field( 'companies_title' ) ?></h1>
		<h2><?php the_field( 'companies_subtitle' ) ?></h2>
	</div>

	<div class="inner companies">
		<?php while ( have_rows( 'companies' ) ) : the_row(); ?>

			<div class="company">
				<div class="centring">

					<img src="<?php the_sub_field( 'logo' ) ?>">

					<div>
						<img src="<?php the_sub_field( 'cover' ) ?>">
						<p><?php the_sub_field( 'description' ) ?></p>
					</div>

				</div>
			</div>

		<?php endwhile; ?>
	</div>

</section>

<aside class="overlay">

	<div class="inner">
		<a href="#" class="close">close</a>
	</div>

</aside>

<?php get_footer(); ?>