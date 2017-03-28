<div class="row" id="related">
  <div class="col-md-12">
    <hr>
  </div>

  <?php query_posts("showposts=12"); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-3 col-sm-4 col related-loop">
      <p>
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          </a>
      </p>
      <p class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
    </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>


</div>
