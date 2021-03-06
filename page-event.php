<?php
/* Template Name: 会食や法事など */
get_header(); ?>

<main id="main" class="main">
    <section class="event-section circle1">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mb-5">
                    <h2 class="my-5 event">会食や法事などの集まりにも</h2>
                    <p class="">お子様の七五三やお食い初めのお祝いや御法事など、またご家族やお仲間の会食、御会社のご接待など、様々な場面にご利用いただけます。（大小の個室有り）</p>
                    <p class="">お料理をお子様向けにしてお出しすることも出来ます。<br>予約時にアレルギーのことなど、お気軽にご相談ください。</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mt-3 text-md-center">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/food1.jpg')); ?>" alt="" class="mb-2">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/food2.jpg')); ?>" alt="">
                    <p class="text-md-center">お食い初め</p>
                </div>

            </div>
        </div><!-- container end -->
    </section>
    <section class="event-section circle2">
        <div class="container">
            <div class="grid-box5">
                <div class="box-item col3-md-box">
                    <h2 class="mb-5 event">出張料理</h2>
                    <p class="">ご自宅で、お店の味をご堪能いただけます。<br>お料理はもちろん、器など全てをご用意して、料理人が伺わせていただきます。<br>なお温かなお料理を調理するのに、お台所をお借りすることがあります。</p>
                    <p class="">※時間、人数、お料理内容、ご予算は要相談</p>
                </div>
                <div class="box-item col2-md-box">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/food3.jpg')); ?>" alt="">
                </div>
                <div class="box-item">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/food4.jpg')); ?>" alt="ポットパイ">
                </div>
                <div class="box-item">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/food5.jpg')); ?>" alt="">
                </div>
                <div class="box-item">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/food6.jpg')); ?>" alt="土鍋">
                </div>
            </div><!-- grid-box5 end -->
        </div>
    </section>
    <section class="event-section circle3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 mb-5">
                    <h2 class="mb-5 event">出張握り</h2>
                    <p class="">職人が、ご自宅に伺いネタケース（出張握り用）に並んだネタを、目の前で注文に応じながら握ります。</p>
                    <p class="">※時間、人数、ネタの種類、ご予算などは要相談</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 text-md-center">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/counter2.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('component/map'); ?>
</main>

<?php get_footer(); ?>
