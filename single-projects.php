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

      <div class="case-study-info">
        <?php the_title(); ?>
        <?php if($featured_img) {
          echo wp_get_attachment_image( $featured_img, $size);
        }?>
        <?php echo $project_sub_title; ?>
        <?php the_content(); ?>
        <?php echo $view_project; ?>
        <?php echo $team_title; ?>
        <?php echo $team_members; ?>
      </div>
        <?php endwhile; // end of the loop. ?>
    </article>

  </main><!-- #main -->

<?php
get_footer();
