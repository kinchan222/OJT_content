<section id="content">
<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;?>
<?php
$args = array(
'post_type' => 'post',
'posts_per_page' => 3,
'paged' => $paged,
'orderby' => 'post_date',
'order' => 'DESC',
);
  ?>
  <?php $posts = new WP_Query($args);?>
  <?php if ($posts -> have_posts()) : ?>
   <?php while($posts -> have_posts()) : $posts -> the_post();?>
      ●ここに投稿記事の内容（タイトルとか画像とか）を記述
   <?php endwhile;?>
  <?php endif; wp_reset_postdata();?>
 
<div id="more_disp">
    <p class="p-post-btn">
    READ MORE
    </p>
  </div>
</section>