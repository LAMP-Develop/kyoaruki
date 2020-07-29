<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="mv">
<div id="mv-carousel" class="carousel slide carousel-fade" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active" data-interval="5000">
<img src="<?php echo $wp_url; ?>/dist/images/mv_pc_01.png" class="d-block w-100" alt="スライドショー" srcset="<?php echo $wp_url; ?>/dist/images/mv_pc_01.png 1x, <?php echo $wp_url; ?>/dist/images/mv_pc_01@2x.png 2x">
</div>
<div class="carousel-item" data-interval="5000">
<img src="<?php echo $wp_url; ?>/dist/images/mv_pc_02.png" class="d-block w-100" alt="スライドショー" srcset="<?php echo $wp_url; ?>/dist/images/mv_pc_02.png 1x, <?php echo $wp_url; ?>/dist/images/mv_pc_02@2x.png 2x">
</div>
<div class="carousel-item" data-interval="5000">
<img src="<?php echo $wp_url; ?>/dist/images/mv_pc_03.png" class="d-block w-100" alt="スライドショー" srcset="<?php echo $wp_url; ?>/dist/images/mv_pc_03.png 1x, <?php echo $wp_url; ?>/dist/images/mv_pc_03@2x.png 2x">
</div>
</div>
</div>
<!-- #mv-carousel -->

<div class="mv-verticaltxt">
<img src="<?php echo $wp_url; ?>/dist/images/mv_vertical.png" alt="おしゃれな人のための着物レンタル" srcset="<?php echo $wp_url; ?>/dist/images/mv_vertical.png 1x, <?php echo $wp_url; ?>/dist/images/mv_vertical@2x.png 2x">
</div>

<div class="mv-jaran">
<img src="<?php echo $wp_url; ?>/dist/images/jaran_pc.png" alt="じゃらん" srcset="<?php echo $wp_url; ?>/dist/images/jaran_pc.png 1x, <?php echo $wp_url; ?>/dist/images/jaran_pc@2x.png 2x">
<img src="<?php echo $wp_url; ?>/dist/images/member_pc.png" alt="じゃらん" srcset="<?php echo $wp_url; ?>/dist/images/member_pc.png 1x, <?php echo $wp_url; ?>/dist/images/member_pc@2x.png 2x">
</div>

<div class="mv-txtkimono">
<img src="<?php echo $wp_url; ?>/dist/images/txt_kimono.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/txt_kimono.png 1x, <?php echo $wp_url; ?>/dist/images/txt_kimono@2x.png 2x">
</div>

</div>

<div class="home-about py-5 text-center">
<div class="container">
<img src="<?php echo $wp_url; ?>/dist/images/top_about_pc.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/top_about_pc.png 1x, <?php echo $wp_url; ?>/dist/images/top_about_pc@2x.png 2x">
</div>
</div>

<div class="py-5">
<div class="infinity-slide">
<div class="infinity-slide-inner">
<?php for ($i=1; $i <= 4; $i++): ?>
<div class="infinity-slide-inner-slide">
<img src="<?php echo $wp_url; ?>/dist/images/about_img_0<?php echo $i; ?>.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/about_img_0<?php echo $i; ?>.png 1x, <?php echo $wp_url; ?>/dist/images/about_img_0<?php echo $i; ?>@2x.png 2x">
</div>
<?php endfor; ?>
<?php for ($i=1; $i <= 4; $i++): ?>
<div class="infinity-slide-inner-slide">
<img src="<?php echo $wp_url; ?>/dist/images/about_img_0<?php echo $i; ?>.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/about_img_0<?php echo $i; ?>.png 1x, <?php echo $wp_url; ?>/dist/images/about_img_0<?php echo $i; ?>@2x.png 2x">
</div>
<?php endfor; ?>
</div>
</div>
</div>

<section class="home-plan py-5">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>PLAN</span>プラン紹介</h2>
<p class="text-center mb-0">着物コーディネートを楽しめるプランからお任せプランまで、<br>様々な種類のプランの中からあなたにぴったりの着物レンタルプランをお選びいただけます。</p>
</div>
</section>

<div class="bg-plan py-5">
<div class="container">

<div class="plan__list">
<?php for ($i=1; $i <= 6; $i++): ?>
<a class="plan__list-item" href="<?php echo $home; ?>/plan/">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/plan_img_1.png" alt="プラン" srcset="<?php echo $wp_url; ?>/dist/images/plan_img_1.png 1x, <?php echo $wp_url; ?>/dist/images/plan_img_1@2x.png 2x">
</div>
<div class="plan__list-item-txt">
<h3>スタンダード<br>着物プラン</h3>
<p>手軽に着物レンタルを楽しみたい人におすすめのプラン。お好きな着物をお選びいただき、帯や小物のコーディネートはスタッフが行います。</p>
<p class="price"><span>2,990</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .plan__list-item -->
<?php endfor; ?>
</div>

<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/plan/">プラン一覧</a>
</div>

</div>
</div>

<section class="bg-light py-5">
<div class="container">
<h2 class="ttl-2 text-center"><span>Option</span>オプション</h2>
<p class="text-center">
<img src="<?php echo $wp_url; ?>/dist/images/top_option_pc.png" alt="オプション" srcset="<?php echo $wp_url; ?>/dist/images/top_option_pc.png 1x, <?php echo $wp_url; ?>/dist/images/top_option_pc@2x.png 2x">
</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/option/">詳しく見る</a>
</div>
</div>
</section>

<section class="py-5 home-instagram">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>Instagram</span>公式インスタグラム</h2>
<p class="text-center">京あるきの公式Instagram（インスタグラム）では、お客様の着物コーディネートを日々更新中！<br>着こなしやヘアスタイルの参考にしてみてください。</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="https://www.instagram.com/kimono_rental/" target="_blank">公式インスタグラムを見る</a>
</div>
</div>
</section>

<section class="bg-plan py-5 home-point">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>POINT</span>京あるきが選ばれるポイント</h2>
<div class="home-point__list">
<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/point_main_01.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/point_main_01.png 1x, <?php echo $wp_url; ?>/dist/images/point_main_01@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 01</h3>
<p class="font-serif">『京都最大級』の超大型店！<br>広々空間で着付！アクセスも抜群！</p>
<p class="small bg-0">京都四条本店は、『祇園』『八坂神社』『清水寺』『八坂庚申堂』『高台寺』等の『祇園東山エリア』伏見稲荷や嵐山…どこへでもアクセス抜群！</p>
</div>
</div>
<!-- .home-point__list__inner -->
<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/point_main_02.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/point_main_02.png 1x, <?php echo $wp_url; ?>/dist/images/point_main_02@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 02</h3>
<p class="font-serif">プロの着付師による『着付』<br>プロの美容師による『ヘアセット』</p>
<p class="small bg-0">老舗呉服店のスタッフが着崩れの心配もなく安心して観光出来るように着付けいたします。ヘアセットは美容師が担当するため、完成度が高い人気のオプションです。</p>
</div>
</div>
<!-- .home-point__list__inner -->
<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/point_main_03.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/point_main_03.png 1x, <?php echo $wp_url; ?>/dist/images/point_main_03@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 03</h3>
<p class="font-serif">関西コレクション8年連続出展の<br>『京都さがの館』がプロデュースした着物</p>
<p class="small bg-0">関西コレクションに着物ショーで出展の「京都さがの館」プロデュースの当店。京都の着付けなら、 テレビや雑誌などのメディアで確かな実績を残す当店にお任せください♪</p>
</div>
</div>
<!-- .home-point__list__inner -->
</div>
</div>
</section>

<div class="home-movie py-5">
<div class="container">
<div class="home-movie-wrap">
<img class="home-movie-icon" src="<?php echo $wp_url; ?>/dist/images/txt_movie.png" alt="movie" srcset="<?php echo $wp_url; ?>/dist/images/txt_movie.png 1x, <?php echo $wp_url; ?>/dist/images/txt_movie@2x.png 2x">
<p class="text-center">
<img src="<?php echo $wp_url; ?>/dist/images/ttl_movie.png" alt="動画でチェック！" srcset="<?php echo $wp_url; ?>/dist/images/ttl_movie.png 1x, <?php echo $wp_url; ?>/dist/images/ttl_movie@2x.png 2x">
</p>
<!-- TODO: youtube -->
<div class="mt-4 text-center">
<a class="btn btn-info" href="" target="_blank">Youtubeチャンネルへ</a>
</div>
</div>
</div>
</div>

<?php get_footer();