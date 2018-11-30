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
			$fact4 = get_field('fact4');
      $fact5 = get_field('fact5');
      $fact6 = get_field('fact6');
			$fact7 = get_field('fact7');
      $fact8 = get_field('fact8');
      $fact9 = get_field('fact9');
			$fact10 = get_field('fact10');
			$fact1_title = get_field('fact1_title');
      $fact2_title = get_field('fact2_title');
      $fact3_title = get_field('fact3_title');
			$fact4_title = get_field('fact4_title');
      $fact5_title = get_field('fact5_title');
      $fact6_title = get_field('fact6_title');
			$fact7_title = get_field('fact7_title');
      $fact8_title = get_field('fact8_title');
      $fact9_title = get_field('fact9_title');
			$fact10_title = get_field('fact10_title');
      $size = "full";
      ?>

			<!-- article -->
			<article>

        <h1 class="intro-blurb"><?php echo $about_title; ?></h1>

				<br class="clear">

        <section id="about-section">
            <div class="about-image">
							<?php if($about_image) {
              echo wp_get_attachment_image( $about_image, $size);
            }?>
						</div>
						<div class="about-text">
	            <div>
								<h4><?php echo $professional_skills_title; ?></h4>
	            	<p><?php echo $professional_skills; ?></p>
							</div>
							<div>
	            	<h4><?php echo $education_title; ?></h4>
	            	<p><?php echo $education; ?></p>
								<br>
		            <h4><?php echo $certificates_title; ?></h4>
		            <p><?php echo $certificates; ?></p>
		            <br>
								<h4><?php echo $contact_title; ?></h4>
		            <p><?php echo $contact; ?></p>
							</div>
						</div>
        </section>

				<section id="about-facts">
					<h1><?php echo $second_title_for_10_facts; ?></h1>
					<div class="fact-image">
						<?php if($fact1) {
						echo wp_get_attachment_image( $fact1, $size);
						}?>
					</div>
					<div>
						<p class="fact-title"><?php echo $fact1_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact2) {
							echo wp_get_attachment_image( $fact2, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact2_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact3) {
							echo wp_get_attachment_image( $fact3, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact3_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact4) {
							echo wp_get_attachment_image( $fact4, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact4_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact5) {
							echo wp_get_attachment_image( $fact5, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact5_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact6) {
							echo wp_get_attachment_image( $fact6, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact6_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact7) {
							echo wp_get_attachment_image( $fact7, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact7_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact8) {
							echo wp_get_attachment_image( $fact8, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact8_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact9) {
							echo wp_get_attachment_image( $fact9, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact9_title; ?></p>
					</div>
					<div class="fact-image">
						<?php if($fact10) {
							echo wp_get_attachment_image( $fact10, $size);
						}?>
					</div>
					<div class="fact-title">
						<p><?php echo $fact10_title; ?></p>
					</div>
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
