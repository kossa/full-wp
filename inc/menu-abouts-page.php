<?php

$current_page_id = get_the_ID();
$parent_page_id = $post->post_parent; 
$args = [
  'sort_order' => 'desc',
  'sort_column' => 'date',
];
$pages = get_page_children($parent_page_id, get_pages($args));

?>
<section class="menu-pages">
  <div class="container">
    <ul class="list-inline">
      <li>About Us:</li>
      <?php foreach ($pages as $page): ?>
          <li <?php echo ($page->ID == $current_page_id) ? 'class="active"' : '' ?>>
            <a href="<?php echo $page->guid ?>">
                <?php echo $page->post_title ?>
            </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</section>