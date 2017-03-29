<?php get_header(); ?>
  <div class="container">

    <div class="scroll">
      <div class="jscroll-inner">
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
        <?php get_template_part('pagination'); ?>

      </div>
    </div>

  </div>
<?php get_footer(); ?>
