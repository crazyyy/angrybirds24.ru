<?php get_header(); ?>
  <div class="container">

    <div class="scroll">
      <div class="jscroll-inner">
        <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
        <?php get_template_part('pagination'); ?>

      </div>
    </div>

  </div>
<?php get_footer(); ?>
