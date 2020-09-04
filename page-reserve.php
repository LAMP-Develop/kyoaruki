<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();

$p = basename(get_the_permalink());
$p = str_replace('-', ' ', $p);
?>

<section class="mv__sub">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="text-danger text-center">
<span class="font-serif d-block"><?php echo $p; ?></span>
<span class="font-serif d-block"><?php the_title(); ?></span>
</h2>
</div>
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
</section>

<div class="pt-3 pb-5">
<div class="container">
<p class="text-center">ご希望の店舗をお選びください。</p>

<div class="d-flex justify-content-center align-items-center flex-wrap reserve-btns">
<a class="btn btn-danger m-2" href="<?php echo $home; ?>/reserve/shop-sijo/">京都四条本店</a>
<a class="btn btn-danger m-2" href="<?php echo $home; ?>/reserve/shop-gion/">京都祇園店</a>
<a class="btn btn-danger m-2" href="<?php echo $home; ?>/reserve/shop-umeda/">大阪梅田店</a>
<a class="btn btn-danger m-2" href="<?php echo $home; ?>/reserve/shop-namba/">大阪なんば店</a>
</div>

</div>
</div>

<?php get_footer();