<?php get_header(); ?>


  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article class="s37-post-single">
          <div class="embed-responsive embed-responsive-4by3">
            <?php the_content(); ?>
          </div>

          <hr>
          <h1 class="text-center"><?php the_title(); ?></h1>
          <hr>

          <div style="font-size:0px;height:0px;line-height:0px;margin:0;padding:0;clear:both"></div>
          <div class="meta-date-com">
            <div class="pull-left"></div>
            <div style="clear: both;"></div>
          </div>

          <?php endwhile; endif; ?>
          <?php comments_template(); ?>

        </article>
      </div>

      <?php get_sidebar(); ?>
    </div>
    <?php get_template_part('related'); ?>
  </div>

<?php get_footer(); ?>
