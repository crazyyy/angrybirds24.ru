<?php $i = 1; if (have_posts()): while (have_posts()) : the_post(); ?>

  <div class="col-md-3 col-sm-4 col loopers">
    <p>
      <a class="loopers-img" href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
      </a>
    </p>
    <p class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
  </div>

  <?php if ( $i == 3 || $i == 6 || $i == 9 || $i == 12 || $i == 15 || $i == 18 || $i == 21 || $i == 24) { ?>
    <div class="clearfix visible-sm-block"></div>
  <?php } else if ( $i == 4 || $i == 8 || $i == 12 || $i == 16 || $i == 20 || $i == 28 ){ ?>
    <div class="clearfix visible-md-block visible-lg-block"></div>
  <?php } ?>

<?php $i++; endwhile; endif; ?>
