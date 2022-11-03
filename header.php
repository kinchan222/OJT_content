<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/css/style.css">
    <title>OJT_kh</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- <div class="first"> -->
    <header>
        <!-- 　ハンバーガーメニュー ボタン部分　 -->
        <input type="checkbox" id="hamburger">
        <label for="hamburger" class="bun">
            <span class="pate"></span>
        </label>

        <div class="header-container"> 
          <?php wp_nav_menu(); ?>
        </div>  

        <!-- <div class="header-main">  　ハンバーガーメニュー部分　 -->
            <!-- <ul>
              <li><a class="header-box" href="">menu1</a></li>
              <li><a class="header-box" href="">menu2</a></li>
              <li><a class="header-box" href="">menu3</a></li>
              <li><a class="header-box" href="">menu4</a></li>  
           </ul> 
       </div> --> 

        <main class="main-conteiner">
            <!-- *** 左上画像 *** -->
        <img class="main-box2" class="visual-sc" src="<?php echo get_template_directory_uri(); ?>/folder/logo.png" alt="">

           <!-- *** 中央画像 *** -->
        <picture class="main-box1">
          <!-- もしヘッダー画像が設定されていたら -->
       <?php if ( get_header_image() ) : ?>
             <img class="pc" src="<?php header_image(); ?>" alt="パソコン用の画像">
       <?php elseif(wp_is_mobile()): ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> 
        <!-- <img class="sp" src="<?php// header_image(); ?>" alt="スマートフォン用の画像"> -->

 
       <!-- もしヘッダー画像が設定されていないなら -->
       <?php else: ?>
          <!-- <img src="<?php //echo get_template_directory_uri(); ?>/src/img/top_img.jpg"> -->
       <?php endif; ?>


        </picture> 

          <!-- *** 右下画像 *** -->
        <picture class="main-box3">
            <source media="(max-width:  767px)" srcset="<?php echo get_template_directory_uri(); ?>/folder/visual_text_sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/folder/visual_text_pc.png" alt="美浜文字">
        </picture>
    </main>
    <div class="main-font">
           <p >進化し続ける「街」<span class="main-hidden">アメリカンビレッジマガジン</span></p>
        </div>

    </header>