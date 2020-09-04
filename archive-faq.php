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
<?php
$faq_cats = get_terms('faq_cat');
foreach ($faq_cats as $term):
?>
<h3 class="plan__list-wrap-ttl"><?php echo $term->name; ?></h3>
<div class="faq__list mb-4">
<?php
$faq_args = [
    'posts_per_page' => -1,
    'post_type' => 'faq',
    'tax_query' => [
      [
        'taxonomy' => 'faq_cat',
        'field' => 'slug',
        'terms' => $term->slug,
      ]
    ]
];
$faq_posts = get_posts($faq_args);
foreach ($faq_posts as $key => $post):
    setup_postdata($post);
?>
<div class="faq__list-item">
<h3 class="faq__list-que"><?php the_title(); ?></h3>
<div class="faq__list-ans"><?php the_content(); ?></div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<?php endforeach; ?>
</div>
</div>
<?php get_footer();