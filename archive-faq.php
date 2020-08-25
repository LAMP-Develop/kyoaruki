<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<section class="mv__sub">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="text-danger text-center">
<span class="font-serif d-block">FAQ</span>
<span class="font-serif d-block">よくある質問</span>
</h2>
</div>
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
</section>

<div class="py-5">
<div class="container">
<div class="faq__list">
<?php
if (have_posts()):
while (have_posts()): the_post(); ?>
<div class="faq__list-item">
<h3 class="faq__list-que"><?php the_title(); ?></h3>
<div class="faq__list-ans"><?php the_content(); ?></div>
</div>
<?php endwhile; endif; ?>
</div>
<?php wp_pagenavi(); ?>
</div>
</div>

<?php get_footer();