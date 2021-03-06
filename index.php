<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'source'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation([
  'prev_text' => '<i class="fa fa-fw fa-angle-left"></i> ' . __('Older posts', 'source'),
  'next_text' => __('Newer posts', 'source') . ' <i class="fa fa-fw fa-angle-right"></i>',
]); ?>
