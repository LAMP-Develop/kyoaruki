<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();

if (is_singular('post')) {
    $cats = get_the_category()[0];
    $p = basename($cats->category_nicename);
    $t = $cats->name;
} elseif (is_singular('column')) {
    $p = 'column';
    $t = 'コラム';
}
$p = str_replace('-', ' ', $p);
?>

<section class="mv__sub">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="text-danger text-center">
<span class="font-serif d-block"><?php echo $p; ?></span>
<span class="font-serif d-block"><?php echo $t; ?></span>
</h2>
</div>
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
</section>

<div class="pb-5">
<div class="container">
<div class="single__post">
<span class="d-block font-serif"><?php the_time('Y.m.d'); ?></span>
<?php the_content(); ?>
</div>
</div>
</div>

<?php get_footer();
