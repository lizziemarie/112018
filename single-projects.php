<?php
/**
 * The template for displaying the single project page
 *
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 */

get_header();
?>

  <main role="main">
    <article class="project">
      <?php while ( have_posts() ) : the_post();
        $project_sub_title = get_field('project_sub_title');
        $view_project = get_field('view_project');
        $team_title = get_field('team_title');
        $team_members = get_field('team_members');
        $featured_img = get_field('featured_img');
        $size = "full";
        ?>
        <section class="intro-section">
          <h1 class="intro-blurb"><?php the_title(); ?></h1>
          <div class="project-image">
            <?php if($featured_img) {
              echo wp_get_attachment_image( $featured_img, $size);
            }?>
          </div>
          <div class="project-sub-title">
            <?php echo $project_sub_title; ?>
          </div>
        </section>
        
        <section class="project-content">
          <?php the_content(); ?>
        </section>

        <!-- Next previous posts -->
        <div class="project-nav">
          <div class="previous project-link">
            <span class="underline--magical"><?php previous_post_link('%link', 'Previous Project'); ?></span>
          </div>
          <div class="next project-link">
            <span class="underline--magical"><?php next_post_link('%link', 'Next Project'); ?> </span>
          </div>
        </div>
      <?php endwhile; // end of the loop. ?>

    </article>

  </main><!-- #main -->

<?php
get_footer();
