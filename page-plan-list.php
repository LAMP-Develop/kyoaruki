<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="mv__sub">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="text-danger text-center">
<span class="font-serif d-block">Plan</span>
<span class="font-serif d-block">プラン</span>
</h2>
</div>
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
</section>

<?php
$plan_terms = get_terms('plan_cat', 'orderby=id&order=asc');
$plan_terms_array = [];
foreach ($plan_terms as $term) {
    $plan_terms_array[] = [
        'id' => $term->term_id,
        'name' => $term->name,
        'slug' => $term->slug,
    ];
}
?>

<section class="pb-5">
<div class="container">
<div class="sub-menu mb-5">
<?php foreach ($plan_terms_array as $key => $val): ?>
<a href="#plan-<?php echo $val['slug']; ?>"><?php echo $val['name']; ?></a>
<?php endforeach; ?>
</div>
<!-- .sub-menu -->

<?php foreach ($plan_terms_array as $key => $val): ?>
<div id="plan-<?php echo $val['slug']; ?>" class="plan__list-wrap">
<h2 class="plan__list-wrap-ttl <?php echo $val['slug']; ?> font-serif"><?php echo $val['name']; ?></h2>
<div class="plan__list">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'plan',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => [ // 着物プランのみ
        [
            'taxonomy' => 'plan_cat',
            'field' => 'slug',
            'terms' => $val['slug'],
        ]
    ]
];
$plan_posts = get_posts($args);
foreach ($plan_posts as $post):
    setup_postdata($post);
?>
<a class="plan__list-item <?php echo $val['slug']; ?>" href="<?php the_permalink(); ?>">
<div class="plan__list-item-thumbnail">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
</div>
<div class="plan__list-item-txt">
<h3><?php the_title(); ?></h3>
<p><?php echo mb_strimwidth(get_field('plan_text'), 0, 120, '…'); ?></p>
<p class="price"><span><?php the_field('plan_price'); ?></span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .plan__list-item -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- .plan__list -->
</div>
<!-- .plan__list-wrap -->
<?php endforeach; ?>

</div>
</section>
<?php get_footer();
