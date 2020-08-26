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

<div class="plan-single pb-5">
<?php
$slides = get_field('plan_slide');
if (is_array($slides) && count($slides) > 0):
?>
<div class="plan-single__slide">
<div class="slick-slider">
<?php foreach ($slides as $key => $slide): ?>
<div><img class="w-100 d-block" src="<?php echo $slide['plan_slide_img']; ?>" alt="<?php the_title(); ?>画像"></div>
<?php endforeach; ?>
</div>
<div class="slider-nav">
<?php foreach ($slides as $key => $slide): ?>
<div class="thumbnailnav"><img class="w-100 d-block" src="<?php echo $slide['plan_slide_img']; ?>" alt="<?php the_title(); ?>画像"></div>
<?php endforeach; ?>
</div>
</div>
<?php endif; ?>

<div class="container">
<div class="plan-single__info mt-4">
<p class="plan-single__info-price">事前予約で<span class="font-serif"><?php the_field('plan_price'); ?></span>円(税抜)</p>
<p><?php the_field('plan_text'); ?></p>
</div>
<div class="plan-single__shop bg-light p-3 mt-4">
<p class="mb-2">対応店舗</p>
<?php
$shops = get_field('plan_shop');
foreach ($shops as $key => $shop) {
    echo '<span class="badge bg-white p-2 font-weight-normal mr-1 mb-1">'.$shop.'</span>';
}
?>
</div>
<div class="mt-4 text-center">
<a class="btn btn-outline-danger" href="<?php echo $home; ?>/reserve/">WEB予約</a>
</div>
<div class="mt-5 plan-single__content">
<h3 class="font-serif">レンタル内容</h3>
<div class="plan-single__content__list">
<?php
$plan_content = get_field('plan_contents');
foreach ($plan_content as $key => $val): ?>
<div class="plan-single__content__list-item">
<img class="w-100 d-block" src="<?php echo $val['plan_contents_img']; ?>" alt="<?php echo $val['plan_contents_ttl']; ?>">
<p class="mb-0 mt-2"><?php echo $val['plan_contents_ttl']; ?></p>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</div>

<section class="py-5 bg-light plan-single__option">
<div class="container">
<h2>オプション</h2>

<div class="plan-single__option__list">
<div class="plan__list">
<?php
$plan_options = get_field('plan_options');
foreach ($plan_options as $key => $opt): ?>

<?php if ($opt === 'オーダーメイドヘアセット'): ?>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_hair.png" alt="オーダーメイドヘアセット" srcset="<?php echo $wp_url; ?>/dist/images/op_hair.png 1x, <?php echo $wp_url; ?>/dist/images/op_hair@2x.png 2x">
</div>
<div class="plan__list-item-txt">
<h3>オーダーメイドヘアセット</h3>
<p>プロのスタイリストが崩れにくく、かわいいヘアアレンジをいたします。ご希望のスタイルがある方は、ぜひ写真をもってお越しください！</p>
<p class="price">+<span>1,500</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</div>
<?php endif; ?>

<?php if ($opt === '金襴帯'): ?>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_kin.png" alt="金襴帯" srcset="<?php echo $wp_url; ?>/dist/images/op_kin.png 1x, <?php echo $wp_url; ?>/dist/images/op_kin@2x.png 2x">
</div>
<div class="plan__list-item-txt">
<h3>金襴帯</h3>
<p>金の模様・金の加工・金の刺繍が入った高級感のある帯で、着物をさらに華やかに演出いたします。</p>
<p class="price">+<span>500</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</div>
<?php endif; ?>

<?php if ($opt === '髪飾り付け放題'): ?>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_kazari.png" alt="髪飾り付け放題" srcset="<?php echo $wp_url; ?>/dist/images/op_kazari.png 1x, <?php echo $wp_url; ?>/dist/images/op_kazari@2x.png 2x">
</div>
<div class="plan__list-item-txt">
<h3>髪飾り付け放題</h3>
<p>ヘアセットしたあなたをよりきれいに。着物と一体になり、より和服美人を演出いたします。どれだけ選んで頂いても付け放題なので、安心・満足！</p>
<p class="price">+<span>500</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</div>
<?php endif; ?>

<?php if ($opt === '帯飾り'): ?>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_obi.png" alt="帯飾り" srcset="<?php echo $wp_url; ?>/dist/images/op_obi.png 1x, <?php echo $wp_url; ?>/dist/images/op_obi@2x.png 2x">
</div>
<div class="plan__list-item-txt">
<h3>帯飾り</h3>
<p>帯まわりに付けるアクセサリーです。着物美人をより華やかに演出。ちょっとしたアクセントで差をつけちゃおう!</p>
<p class="price">+<span>500</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</div>
<?php endif; ?>

<?php if ($opt === 'お荷物お預かり'): ?>
<div class="w-100"></div>
<a class="plan__list-item no-img mr-md-3 mr-0" href="<?php echo $home; ?>/option/">
<div class="plan__list-item-txt">
<h3>お荷物お預かり</h3>
<p class="price"><span>無料</span></p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<?php endif; ?>

<?php if ($opt === 'パペポパック'): ?>
<a class="plan__list-item no-img" href="<?php echo $home; ?>/option/">
<div class="plan__list-item-txt">
<h3>パペポパック</h3>
<p class="price"><span>600</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<?php endif; ?>

<?php if ($opt === 'プロカメラマン撮影'): ?>
<a class="plan__list-item no-img mr-0" href="<?php echo $home; ?>/option/">
<div class="plan__list-item-txt">
<h3>プロカメラマン撮影</h3>
<p class="price"><span>1,500</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<?php endif; ?>

<?php endforeach; ?>
</div>
</div>

<div class="mt-4 text-center">
<a class="btn btn-outline-danger" href="<?php echo $home; ?>/reserve/">WEB予約</a>
</div>
</div>
</section>

<?php get_footer();
