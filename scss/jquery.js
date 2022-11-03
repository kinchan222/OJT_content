$(function() {

    // *******フェードイン・フェードアウト part1***********
        setTimeout(function(){
        // 0.5（500）秒後に1（1000）秒かけてフェードイン
            $('.pc').fadeIn(3000);
         },1000);
    
         // 2.5（2500）秒後に1（1000）秒かけてフェードアウト
         setTimeout(function(){
           $('.pc').fadeOut(3000);
        },1000);

    //     setTimeout(function(){
    //        $('.pc').fadeTo(0, 1);
    //    });
    
     // *******フェードイン・フェードアウト part2***********
    //  setTimeout(function(){
    //  $('.pc').fadeToggle(3000);
    //  },1000);  



// ******** レスポンシブ画像変更 ************
// var $elem = $('.responsive_img');
// var sp = '_sp.';
// var pc = '_pc.';
// var replaceWidth = 767;
// function imageSwitch() {
// var windowWidth = parseInt($(window).width());
// $elem.each(function() {
// var $this = $(this);
// if(windowWidth >= replaceWidth) {
// $this.attr('src', $this.attr('src').replace(sp, pc));
// } else {
// $this.attr('src', $this.attr('src').replace(pc, sp));
// }
// });
// }
// imageSwitch();
// var resizeTimer;
// $(window).on('resize', function() {
// clearTimeout(resizeTimer);
// resizeTimer = setTimeout(function() {
// imageSwitch();
// }, 100);
// });





// // ******** 投稿表示数を増やす************
// var now_post_num = 6; // 現在表示されている数
// var get_post_num = 6; // 一度に取得する数
 
// $(function() {
//     $("#more_disp a").live("click", function() {
         
//         $("#more_disp").html('<img class="ajax_loading" src="http://localhost/wordpress/wp-content/themes/ajax_loading/images/ajax_loader.gif" />');
         
//         $.ajax({
//             type: 'post',
//             url: 'http://localhost/wordpress/wp-content/themes/ajax_loading/more-disp.php',
//             data: {
//                 'now_post_num': now_post_num,
//                 'get_post_num': get_post_num
//             },
//             success: function(data) {
//                 now_post_num = now_post_num + get_post_num;
//                 $(".main-conteiner2").append(data);
//                 $("#more_disp").remove();
//                 $(".main-conteiner2").append('<div id="more_disp"><a href="#">もっと表示</a></div>');
//             }
//         });
//         return false;
//     });
// });






// 大外のカッコ
 });