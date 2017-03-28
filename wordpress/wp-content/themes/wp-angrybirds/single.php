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
<!--           WP QUADS Content Ad Plugin v. 1.5.0
<div class="quads-location quads-ad1" id="quads-ad1" style="float:none;margin:0px;">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, quidem odit nulla, numquam sunt, hic voluptatem, molestias sapiente reprehenderit vero quae similique deserunt vel ex suscipit fuga nobis ab aspernatur!
</div> -->
          <div style="font-size:0px;height:0px;line-height:0px;margin:0;padding:0;clear:both"></div>
          <div class="meta-date-com">
            <div class="pull-left">
            </div>
<!--             <div class="pull-right">
  <div class="kk-star-ratings  top-left lft" data-id="246">
    <div class="kksr-stars kksr-star gray">
      <div class="kksr-fuel kksr-star yellow" style="width:0%;"></div>
      kksr-fuel
      <a href="#1"></a>
      <a href="#2"></a>
      <a href="#3"></a>
      <a href="#4"></a>
      <a href="#5"></a>
    </div>
    kksr-stars
    <div class="kksr-legend">
      <div vocab="http://schema.org/" typeof="Blog">
        <div property="name" class="kksr-title">Angry Birds / Энгри Бердс в лабиринте (на двоих)</div>
        <div property="aggregateRating" typeof="AggregateRating"><span property="ratingValue">3.85</span> - Оценок: <span property="ratingCount">78</span>
          <meta property="bestRating" content="5">
          <meta property="worstRating" content="1"> </div>
      </div>
    </div>
    kksr-legend
  </div>
  kk-star-ratings
  <br clear="both">
</div> -->
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
