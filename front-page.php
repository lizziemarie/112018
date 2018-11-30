<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="intro-section">
			<h1 class="intro-blurb"><span class="underline--magical">Lizzie Willett is a freelance user experience and visual designer, currently working in Seattle, WA</span></h1>
		</section>
		<!-- projects -->
		<section class="projects-section">
			<?php $args = array( 'post_type' =>'projects', );
		$query = new WP_Query( $args );?>
		<?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<!--<div class="showcase">-->

				<div class="showcase showcase-li column">
					<a href="<?php the_permalink(); ?>" class="showcaselink">
						<div class="showcase-item">
							<!--<img class="showcase-image">-->
							<?php the_post_thumbnail();?>

							<div class="showcase-caption">
								<span>
								<h3><?php the_title(); ?></h3>
								<p><?php echo( get_post_meta ( get_the_ID(), 'project_type', true))?></p></span>
							</div>

						</div>
					</a>
				</div>

	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
			<!--</div>-->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
