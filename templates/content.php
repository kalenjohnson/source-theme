<article <?php post_class(); ?>>
  <header>
    <?php if (has_post_thumbnail()) : ?>
      <div class="header-content">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
      <div class="featured-image">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php else : ?>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    <?php endif; ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
