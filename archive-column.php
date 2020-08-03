<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section class="mv__sub">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="text-danger text-center">
<span class="font-serif d-block">COLUMN</span>
<span class="font-serif d-block">着物レンタルで京都観光をもっと満喫</span>
</h2>
</div>
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
</section>
<div class="pb-5">
<div class="container">
<div class="column__list">
<?php
if (have_posts()):
while (have_posts()): the_post(); ?>
<article class="column__list-item">
<a href="<?php the_permalink(); ?>">
<picture class="column__list-thumbnail">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
</picture>
</a>
<div class="column__list-txt">
<span class="column__list-time"><?php the_time('Y.m.d'); ?></span>
<h3 class="column__list-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
</article>
<?php endwhile; endif; ?>
</div>
</div>
</div>
<?php get_footer();
