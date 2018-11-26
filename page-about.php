<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post();
      $about_title = get_field('about_title');
      $about_image = get_field('about_image');
      $professional_skills_title = get_field('professional_skills_title');
      $professional_skills = get_field('professional_skills');
      $education_title = get_field('education_title');
      $education = get_field('education');
      $certificates_title = get_field('certificates_title');
      $certificates = get_field('certificates');
      $contact_title = get_field('contact_title');
      $contact = get_field('contact');
      $second_title_for_10_facts = get_field('second_title_for_10_facts');
      $fact1 = get_field('fact1');
      $fact2 = get_field('fact2');
      $fact3 = get_field('fact3');
      $size = "full";
      ?>

			<!-- article -->
			<article>

        <h3><?php echo $about_title; ?></h3>

				<br class="clear">

        <section>
            <?php if($about_image) {
              echo wp_get_attachment_image( $about_image, $size);
            }?>
            <h4><?php echo $professional_skills_title; ?></h4>
            <?php echo $professional_skills; ?>
            <h4><?php echo $education_title; ?></h4>
            <?php echo $education; ?>
            <h4><?php echo $certificates_title; ?></h4>
            <?php echo $certificates; ?>
            <h4><?php echo $contact_title; ?></h4>
            <?php echo $contact; ?>
            <?php echo $second_title_for_10_facts; ?>
            <?php if($fact1) {
              echo wp_get_attachment_image( $fact1, $size);
            }?>
            <?php if($fact2) {
              echo wp_get_attachment_image( $fact2, $size);
            }?>
            <?php if($fact3) {
              echo wp_get_attachment_image( $fact3, $size);
            }?>

        </section>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
