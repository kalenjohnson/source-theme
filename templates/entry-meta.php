<?php $tags = get_the_tag_list('', __(', ', 'source')); ?>
<div class="meta-container">
  <div class="meta-box">
    <a href="<?php the_permalink(); ?>">
      <time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
    </a>
    <p class="byline author vcard"><?php echo __('By', 'source'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
  </div>
  <div class="meta-box">
    <?php if ($tags) : ?>
      <h6><?php echo __('Tags:', 'source'); ?></h6>
      <?php echo $tags; ?>
    <?php endif ?>
  </div>
</div>
