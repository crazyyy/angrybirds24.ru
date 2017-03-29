<?php /* Template Name: Home Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="container">

    <div class="scroll">
      <div class="jscroll-inner">
        <div class="row">

          <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 8, 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1), ); query_posts($args); ?>
          <?php get_template_part('loop'); ?>
        </div>
        <?php get_template_part('pagination'); ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </article>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
