<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<footer class="footer">

<section class="footer-cta">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2><img src="<?php echo $wp_url; ?>/dist/images/cta_ttl2.png" alt="ご予約について" srcset="<?php echo $wp_url; ?>/dist/images/cta_ttl2.png 1x, <?php echo $wp_url; ?>/dist/images/cta_ttl2@2x.png 2x"></h2>
<h3>京都の着物レンタルなら京あるき</h3>
<p>京あるきではお手頃なお値段で高品質な着物レンタルをお楽しみいただけます。
<br>お友達同士はもちろんカップルでの京都デートにもおすすめです。
<br>お手頃価格なのに安っぽくなく高級で、おしゃれかわいい着物レンタルとヘアセットで京都散策を満喫してください。</p>
<div class="mt-4 text-center">
<a class="btn btn-danger" href="<?php echo $home; ?>/">WEB予約</a>
</div>
</div>
</section>

<div class="footer-cta__bottom">
<div class="footer-cta__bottom-item">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<h3 class="font-serif">京都四条本店</h3>
<p>阪急「烏丸駅」地下鉄「四条駅」徒歩2分！</p>
<div class="mt-4 text-center">
<a class="btn btn-danger" href="tel:075-213-7171"><i class="fas fa-phone-alt mr-3"></i>075-213-7171</a>
</div>
</div>
<div class="footer-cta__bottom-item">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<h3 class="font-serif">京都祇園店</h3>
<p>八坂庚申堂・祇園エリアのすぐそば！</p>
<div class="mt-4 text-center">
<a class="btn btn-danger" href="tel:075-541-7761"><i class="fas fa-phone-alt mr-3"></i>075-541-7761</a>
</div>
</div>
</div>

<?php
// TOPのみのSEOコンテンツ
if (is_home() || is_front_page()) {
    get_template_part('template/home-seo');
}
?>

<div class="footer-links">
<div class="container">
<div class="row">
<div class="col-md-4">
<h3 class="font-serif">店舗一覧</h3>
<ul class="footer-links__shops">
<li><a href="<?php echo $home; ?>/shop#">京都四条本店<i class="fas fa-chevron-circle-right text-danger"></i></a></li>
<li><a href="<?php echo $home; ?>/shop#">京都祇園店<i class="fas fa-chevron-circle-right text-danger"></i></a></li>
<li><a href="<?php echo $home; ?>/shop#">大阪梅田店<i class="fas fa-chevron-circle-right text-danger"></i></a></li>
<li><a href="<?php echo $home; ?>/shop#">大阪なんば店<i class="fas fa-chevron-circle-right text-danger"></i></a></li>
</ul>
</div>
<div class="col-md-8">
<h3 class="font-serif">プラン一覧</h3>
<div class="footer-links__plans">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'plan',
    'orderby' => 'date',
    'order' => 'DESC',
];
$plan_posts = get_posts($args);
foreach ($plan_posts as $post):
    setup_postdata($post);
?>
<a href="<?php the_permalink(); ?>">
<span><?php the_title(); ?></span>
<span><i class="font-serif"><?php the_field('plan_price', get_the_ID()); ?></i>円</span>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
</div>
</div>

<div class="footer-main mt-5">
<div class="container py-5">
<div class="row">
<div class="col-md mb-md-0 mb-4">
<div class="footer-main-logo text-md-left text-center">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x">
</a>
</div>
</div>
<div class="col-md text-md-right text-center">
<div class="d-flex align-items-center flex-wrap justify-content-md-end justify-content-center">
<a class="text-body small mr-3" href="<?php echo $home; ?>/">運営会社</a>
<a class="text-body small mr-3" href="<?php echo $home; ?>/">プライバシーポリシー</a>
<a class="text-body small mr-3" href="<?php echo $home; ?>/">利用規約</a>
<a class="text-body small" href="<?php echo $home; ?>/">お問い合わせ</a>
</div>
<div class="d-flex align-items-center flex-wrap justify-content-md-end justify-content-center mt-3">
<a class="text-danger h5" href="https://www.instagram.com/kimono_rental/" target="_blank"><i class="fab fa-instagram"></i></a>
<a class="text-danger h5 mx-4" href="https://twitter.com/kyo_aruki" target="_blank"><i class="fab fa-twitter"></i></a>
<a class="text-danger h5" href="https://www.facebook.com/kyoaruki.kimono" target="_blank"><i class="fab fa-facebook"></i></a>
</div>
</div>
</div>
</div>
<div id="copy">©2020 <?php bloginfo('name'); ?>.</div>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>