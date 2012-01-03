<ul class="sitemap"><?php foreach ($pages->visible() AS $p) show_page($p); ?></ul>
<?php
function show_page($page)
{
  $children = $page->children()->visible();
?>
  <li>
    <a href="<?php echo $page->url(); ?>"><?php echo $page->title(); ?></a>
    <?php if ($children->countVisible()): ?>
    <ul><?php foreach ($children as $child) show_page($child); ?></ul>
    <?php endif ?>
  </li>
<?php
}
?>
