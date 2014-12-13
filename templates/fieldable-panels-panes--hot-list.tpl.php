<?php
/**
 * @fieldable-panels-panes--kala-picturepanes.tpl.php
 * Main panel pane template for kala picturepane panels
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
$bk_color = false;
if( isset($content['field_hot_list_bk_color'] )){
  $bk_color = $content['field_hot_list_bk_color']['#items'][0]['value'];
  unset($content['field_hot_list_bk_color'] );
}
?>

<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<aside class="<?php print $classes; ?> pane-bk-<?php if($bk_color) { print $bk_color; } else { print 'none'; } ?>" <?php print $id; ?> <?php print $attributes; ?> role="complemtary">
  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>
  <?php if ($title): ?>
  <header>
    <?php print render($title_prefix); ?>

      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>

    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>
  <?php if ($feeds): ?>
    <div class="feed">
      <?php print $feeds; ?>
    </div>
  <?php endif; ?>

  <figure class="pane-content">
    <?php
      print render($content);
    ?>
  </figure>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <div class="more-link">
      <?php print $more; ?>
    </div>
  <?php endif; ?>
</aside>
<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
