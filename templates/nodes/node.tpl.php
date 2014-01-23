<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
     <h3<?php print $title_attributes; ?>><a rel="dofollow" class="ceraptitle" href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>

  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?> id="articleclass">
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
      <div class="submitted">
      <?php print $submitted; ?>
    </div>
    <div class="readmore-container">
        <?php print render($content['links']); ?>
</div>

  <?php print render($content['comments']); ?>
</div>
