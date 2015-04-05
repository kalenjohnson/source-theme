<?php $tags = get_the_tag_list('', __(', ', 'source')); ?>
<div class="meta-container">
  <div class="meta-box">
    <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
    <p class="byline author vcard"><?= __('By', 'source'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
  </div>
  <div class="meta-box">
    <?php if ($tags) : ?>
      <h6><?= __('Tags:', 'source'); ?></h6>
      <?= $tags; ?>
    <?php endif ?>
  </div>
</div>
