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
<p class="text-center">着物コーディネートを楽しめるプランからお任せプランまで、<br>様々な種類のプランの中からあなたにぴったりの着物レンタルプランをお選びいただけます。</p>
</div>
</section>

<?php get_footer();