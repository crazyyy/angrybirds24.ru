<div class="col-md-4 col-sm-12">
  <sidebar class="sidebar">

    <?php if ( is_active_sidebar('widgetarea1') ) : ?>
      <?php dynamic_sidebar( 'widgetarea1' ); ?>
    <?php else : ?>

    <?php endif; ?>

    <aside class="widget widget_text">
      <h1 class="widget-title">Другие игры</h1>
      <div class="textwidget">

        <?php query_posts("showposts=12"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p>
              <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              </a>
            </p>
            <p><a href="<?php the_permalink(); ?>" target="_blank" rel="nofollow"><?php the_title(); ?></a></p>
          <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

      </div>
    </aside>
  </sidebar>
</div>
