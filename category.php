<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="mv__sub">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="text-danger text-center">
<span class="font-serif d-block">NEWS</span>
<span class="font-serif d-block">お知らせ</span>
</h2>
</div>
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
</section>
<div class="pb-5">
<div class="container">
<div class="news__list">
<?php
if (have_posts()):
while (have_posts()): the_post(); ?>
<a href="<?php the_permalink(); ?>">
<span class="font-serif"><?php the_time('Y.m.d'); ?></span>
<span><?php echo get_the_category()[0]->name; ?></span>
<span><?php the_title(); ?></span>
</a>
<?php endwhile; endif; ?>
</div>
</div>
</div>
<?php get_footer();
