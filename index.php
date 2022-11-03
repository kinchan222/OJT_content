<?php get_header(); ?>

<!-- ********** ループ文　*********** -->

    <h1>Latest Articles</h1>
  <main class="main-conteiner2">
    <?php query_posts('posts_per_page=6'); ?>
      <?php 
         if (have_posts()):
           while(have_posts()):
             the_post();
      ?>
    <section class="contents">

        <div class="contents-bx1">
           <?php the_post_thumbnail(); ?>
           
               <!-- <img src="<?php //echo get_stylesheet_directory_uri();?>/folder/post_img_1.png" alt=""> -->
            <div class="date">
                <div class="blog">
                    <time datetime=""><?php echo get_the_date(); ?></time>
                    <p class="p"><?php the_excerpt(); ?></p>
                </div>
                <a href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
        </div>
     </section>
           <?php endwhile;
           else :?>
            Not Found.
           <?php endif;?>
           <?php wp_reset_query(); ?> 
           
 </main>

        <div id="more_disp"><a href="#">もっと見る</a></div>



    <?php get_footer(); ?>