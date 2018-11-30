<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1 class="intro-blurb"><span class="underline--magical">I am freelance user experience and visual designer, currently working in Seattle, Washington</span></h1>

		<!-- projects -->
		<?php $args = array( 'post_type' =>'projects', );
		$query = new WP_Query( $args );?>
		<?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<a href="<?php the_permalink(); ?>" class="home-project-image">
				<?php the_post_thumbnail();?>
			</a>
				<p><?php echo( get_post_meta ( get_the_ID(), 'year', true))?></p>
				<h3><?php the_title(); ?></h3>
				<p><?php echo( get_post_meta ( get_the_ID(), 'project_type', true))?></p>

	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
