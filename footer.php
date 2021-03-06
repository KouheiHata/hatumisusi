<footer class="footer">
    
    <div class="container">
        <div class="row">
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
               <ul class="">
                   <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                   <li><a href="<?php echo esc_url(home_url('information')); ?>">店舗情報</a></li>
                   <li><a href="<?php echo esc_url(home_url('menu')) ?>">メニュー</a></li>
                   <li><a href="<?php echo esc_url(home_url('event')) ?>">会食や法事など</a></li>
               </ul>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-md-6 text-white">
               <p class="copy-right"><small>&copy; 2020 hatumisushi.</small></p>
           </div>
        </div>
    </div>

</footer>
<!-- トップへ戻るボタン -->
<div id="page_top" class="arrow"><a href="#top"></a></div>
</div><!-- wrapper end ▲ wrapperクラスの初め部分はheader部分に -->

<!-- Bootstrap4 jQuery Popper CDN -->
<!-- スムーズスクロール実装のためスリム版から通常ミニ版へ変更 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
    $(function() {
        $('.menu').on('click',function(){
            $('.menu-line').toggleClass('active');
            $('.navigation-fluid').toggleClass('hide');
        });
    });
</script>

<script>
    $(function() {
        var menu_offset = $(".nav-box").offset().top;
        $(window).scroll(
            function(){
                var my_offset = $(window).scrollTop();
                if(menu_offset < my_offset){
                    $(".nav-box").addClass("fixed-top");
                } else {
                    $(".nav-box").removeClass("fixed-top");
                }
            }
        )
        });
</script>

<?php wp_footer(); ?>
</body>
</html>