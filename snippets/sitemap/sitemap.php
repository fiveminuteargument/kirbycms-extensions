<ul<?php if (!isset($map_pages)) echo ' class="sitemap"'; ?>>
<?php if(!isset($map_visible)) $map_visible = true;
if(!isset($map_pages)) $map_pages = $map_visible ? $pages->visible() : $pages;

foreach ($map_pages AS $map_page):
  $children = $map_visible ? $map_page->children()->visible() : $map_page->children();
?>
  <li>
    <a href="<?php echo $map_page->url(); ?>"><?php echo $map_page->title(); ?></a>
    <?php if (count($children->_)) snippet('sitemap', array('map_pages' => $children, 'map_visible' => $map_visible)); ?>
  </li>
<?php
endforeach;
?>
</ul>
