<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv">
<div id="mv-carousel" class="carousel slide carousel-fade d-md-block d-none" data-ride="carousel">
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
<div id="mv-carousel-sp" class="carousel slide carousel-fade d-md-none" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active" data-interval="5000">
<img src="<?php echo $wp_url; ?>/dist/images/mv_sp_01.png" class="d-block w-100" alt="スライドショー" srcset="<?php echo $wp_url; ?>/dist/images/mv_sp_01.png 1x, <?php echo $wp_url; ?>/dist/images/mv_sp_01@2x.png 2x">
</div>
<div class="carousel-item" data-interval="5000">
<img src="<?php echo $wp_url; ?>/dist/images/mv_sp_02.png" class="d-block w-100" alt="スライドショー" srcset="<?php echo $wp_url; ?>/dist/images/mv_sp_02.png 1x, <?php echo $wp_url; ?>/dist/images/mv_sp_02@2x.png 2x">
</div>
<div class="carousel-item" data-interval="5000">
<img src="<?php echo $wp_url; ?>/dist/images/mv_sp_03.png" class="d-block w-100" alt="スライドショー" srcset="<?php echo $wp_url; ?>/dist/images/mv_sp_03.png 1x, <?php echo $wp_url; ?>/dist/images/mv_sp_03@2x.png 2x">
</div>
</div>
</div>
<!-- #mv-carousel-sp -->
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
<img class="d-md-block d-none" src="<?php echo $wp_url; ?>/dist/images/top_about_pc.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/top_about_pc.png 1x, <?php echo $wp_url; ?>/dist/images/top_about_pc@2x.png 2x">
<img class="d-md-none" src="<?php echo $wp_url; ?>/dist/images/top_about_sp.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/top_about_sp.png 1x, <?php echo $wp_url; ?>/dist/images/top_about_sp@2x.png 2x">
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
<p class="text-md-center mb-0">着物コーディネートを楽しめるプランからお任せプランまで、<br class="d-md-inline d-none">様々な種類のプランの中からあなたにぴったりの着物レンタルプランをお選びいただけます。</p>
</div>
</section>
<div class="bg-plan py-5">
<div class="container">
<div class="plan__list">
<?php
$args = [
    'posts_per_page' => 6,
    'post_type' => 'plan',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [ // 着物プランのみ
        [
            'taxonomy' => 'plan_cat',
            'field' => 'slug',
            'terms' => 'kimono',
        ]
    ]
];
$plan_posts = get_posts($args);
foreach ($plan_posts as $post):
    setup_postdata($post);
?>
<a class="plan__list-item" href="<?php echo $home; ?>/plan/">
<div class="plan__list-item-thumbnail">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
</div>
<div class="plan__list-item-txt">
<h3><?php the_title(); ?></h3>
<p>手軽に着物レンタルを楽しみたい人におすすめのプラン。お好きな着物をお選びいただき、帯や小物のコーディネートはスタッフが行います。</p>
<p class="price"><span>2,990</span>円</p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .plan__list-item -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/plan/">プラン一覧</a>
</div>
</div>
</div>
<section class="bg-light py-5">
<div class="container">
<h2 class="ttl-2 text-center"><span>Option</span>オプション</h2>
<p class="text-center">
<img class="d-md-inline d-none" src="<?php echo $wp_url; ?>/dist/images/top_option_pc.png" alt="オプション" srcset="<?php echo $wp_url; ?>/dist/images/top_option_pc.png 1x, <?php echo $wp_url; ?>/dist/images/top_option_pc@2x.png 2x">
<img class="d-md-none" src="<?php echo $wp_url; ?>/dist/images/top_option_sp.png" alt="オプション" srcset="<?php echo $wp_url; ?>/dist/images/top_option_sp.png 1x, <?php echo $wp_url; ?>/dist/images/top_option_sp@2x.png 2x">
</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/option/">詳しく見る</a>
</div>
</div>
</section>
<section class="py-5 home-instagram">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>Instagram</span>公式インスタグラム</h2>
<p class="text-center">京あるきの公式Instagram（インスタグラム）では、お客様の着物コーディネートを日々更新中！<br>着こなしやヘアスタイルの参考にしてみてください。</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="https://www.instagram.com/kimono_rental/" target="_blank">公式インスタグラムを見る</a>
</div>
</div>
</section>
<section class="bg-plan py-5 home-point">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>POINT</span>京あるきが選ばれるポイント</h2>
<div class="home-point__list">
<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/point_main_01.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/point_main_01.png 1x, <?php echo $wp_url; ?>/dist/images/point_main_01@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 01</h3>
<p class="font-serif">『京都最大級』の超大型店！<br>広々空間で着付！アクセスも抜群！</p>
<p class="small bg-0">京都四条本店は、『祇園』『八坂神社』『清水寺』『八坂庚申堂』『高台寺』等の『祇園東山エリア』伏見稲荷や嵐山…どこへでもアクセス抜群！</p>
</div>
</div>
<!-- .home-point__list__inner -->
<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/point_main_02.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/point_main_02.png 1x, <?php echo $wp_url; ?>/dist/images/point_main_02@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 02</h3>
<p class="font-serif">プロの着付師による『着付』<br>プロの美容師による『ヘアセット』</p>
<p class="small bg-0">老舗呉服店のスタッフが着崩れの心配もなく安心して観光出来るように着付けいたします。ヘアセットは美容師が担当するため、完成度が高い人気のオプションです。</p>
</div>
</div>
<!-- .home-point__list__inner -->
<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/point_main_03.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/point_main_03.png 1x, <?php echo $wp_url; ?>/dist/images/point_main_03@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 03</h3>
<p class="font-serif">関西コレクション8年連続出展の<br>『京都さがの館』がプロデュースした着物</p>
<p class="small bg-0">関西コレクションに着物ショーで出展の「京都さがの館」プロデュースの当店。京都の着付けなら、 テレビや雑誌などのメディアで確かな実績を残す当店にお任せください♪</p>
</div>
</div>
<!-- .home-point__list__inner -->
</div>
</div>
</section>
<div class="home-movie py-5">
<div class="container">
<div class="home-movie-wrap">
<img class="home-movie-icon" src="<?php echo $wp_url; ?>/dist/images/txt_movie.png" alt="movie" srcset="<?php echo $wp_url; ?>/dist/images/txt_movie.png 1x, <?php echo $wp_url; ?>/dist/images/txt_movie@2x.png 2x">
<p class="text-center">
<img src="<?php echo $wp_url; ?>/dist/images/ttl_movie.png" alt="動画でチェック！" srcset="<?php echo $wp_url; ?>/dist/images/ttl_movie.png 1x, <?php echo $wp_url; ?>/dist/images/ttl_movie@2x.png 2x">
</p>
<!-- TODO: youtube -->
<div class="mt-4 text-center">
<a class="btn btn-info" href="" target="_blank">Youtubeチャンネルへ</a>
</div>
</div>
</div>
</div>
<section class="home-campaign py-5">
<div class="container">
<h2 class="ttl-2 text-center"><span>Campaign</span>キャンペーン</h2>
<?php
$args = [
    'posts_per_page' => 5,
    'post_type' => 'campaign',
    'orderby' => 'date',
    'order' => 'DESC'
];
$campaign_posts = get_posts($args); ?>
<div id="carousel-campaign" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<?php
foreach ($campaign_posts as $key => $post):
    setup_postdata($post);
    $campaign_ttl = get_the_title();
    $campaign_img_pc_url = get_field('campaign_img_pc');
    $campaign_img_sp_url = get_field('campaign_img_sp');
?>
<div class="carousel-item <?php if($key === 0) {
    echo 'active';
} ?>">
<img src="<?php echo $campaign_img_pc_url; ?>" class="d-block w-100" alt="<?php echo $campaign_ttl; ?>">
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<ol class="carousel-indicators">
<?php for ($i=0; $i < count($campaign_posts); $i++): ?>
<li data-target="#carousel-campaign" data-slide-to="<?php echo $i; ?>" <?php if($i === 0) {
    echo 'class="active"';
} ?>></li>
<?php endfor; ?>
</ol>
<a class="carousel-control-prev" href="#carousel-campaign" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-campaign" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</section>

<section class="py-5 home-shoplist">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>Shop List</span>店舗一覧</h2>
<p class="text-center">京あるきの店舗をご紹介します。京都と大阪の合計4店舗でお客様をお待ちしております。<br>お出かけや観光の前にお立ち寄りください。</p>
<div class="home-shoplist__list">
<a class="home-shoplist__list__item" href="<?php echo $home; ?>/shop#">
<div class="home-shoplist__list__item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/shop_sijo.png" alt="京都四条本店" srcset="<?php echo $wp_url; ?>/dist/images/shop_sijo.png 1x, <?php echo $wp_url; ?>/dist/images/shop_sijo@2x.png 2x">
</div>
<div class="home-shoplist__list__item-txt">
<h3 class="font-serif">京都四条本店</h3>
<p>京都の中心地にあり、観光スポットへのアクセス抜群です！京都のあちこちを楽しみたい人におすすめです。</p>
<div class="home-shoplist__list__item-info">阪急「烏丸駅」地下鉄「四条駅」<span class="text-danger">徒歩2分</span>！</div>
</div>
<div class="home-shoplist__list__item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .home-shoplist__list__item -->
<a class="home-shoplist__list__item" href="<?php echo $home; ?>/shop#">
<div class="home-shoplist__list__item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/shop_kiyomizu.png" alt="京都祇園店" srcset="<?php echo $wp_url; ?>/dist/images/shop_kiyomizu.png 1x, <?php echo $wp_url; ?>/dist/images/shop_kiyomizu@2x.png 2x">
</div>
<div class="home-shoplist__list__item-txt">
<h3 class="font-serif">京都祇園店</h3>
<p>清水寺・八坂神社・八坂庚申堂・祇園・高台寺などの祇園・東山エリアの観光地の中心地です。</p>
<div class="home-shoplist__list__item-info">市バス206号系統「東山安井」<span class="text-danger">徒歩2分</span>！</div>
</div>
<div class="home-shoplist__list__item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .home-shoplist__list__item -->
<a class="home-shoplist__list__item" href="<?php echo $home; ?>/shop#">
<div class="home-shoplist__list__item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/shop_umeda.png" alt="大阪梅田店" srcset="<?php echo $wp_url; ?>/dist/images/shop_umeda.png 1x, <?php echo $wp_url; ?>/dist/images/shop_umeda@2x.png 2x">
</div>
<div class="home-shoplist__list__item-txt">
<h3 class="font-serif">大阪梅田店</h3>
<p>大阪駅や梅田駅からすぐ！アクセス抜群で立ち寄りやすいお店です。</p>
<div class="home-shoplist__list__item-info">阪急「梅田駅」JR「大阪駅」ヨドバシカメラ付近</div>
</div>
<div class="home-shoplist__list__item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .home-shoplist__list__item -->
<a class="home-shoplist__list__item" href="<?php echo $home; ?>/shop#">
<div class="home-shoplist__list__item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/shop_nanba.png" alt="大阪なんば店" srcset="<?php echo $wp_url; ?>/dist/images/shop_nanba.png 1x, <?php echo $wp_url; ?>/dist/images/shop_nanba@2x.png 2x">
</div>
<div class="home-shoplist__list__item-txt">
<h3 class="font-serif">大阪なんば店</h3>
<p>なんばの繁華街のすぐ近く！心斎橋や道頓堀を楽しみたい人にもおすすめのお店です。</p>
<div class="home-shoplist__list__item-info">なんば繁華街のすぐそば！</div>
</div>
<div class="home-shoplist__list__item-arrow"><i class="fas fa-angle-right"></i></div>
</a>
<!-- .home-shoplist__list__item -->
</div>
</div>
</section>

<section class="home-news py-5">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container bg-light py-5">
<h2 class="ttl-2 text-center"><span>NEWS</span>お知らせ</h2>
<div class="home-news-tabs">
<ul class="nav nav-tabs" class="tabs-bar" role="tablist">
<li class="nav-item" role="presentation"><a class="nav-link active" id="news-tab" data-toggle="tab" href="#news-list" role="tab" aria-controls="news" aria-selected="true">お知らせ</a></li>
<li class="nav-item" role="presentation"><a class="nav-link" id="media-tab" data-toggle="tab" href="#media-list" role="tab" aria-controls="media" aria-selected="false">メディア</a></li>
<li class="nav-item" role="presentation"><a class="nav-link" id="others-tab" data-toggle="tab" href="#others-list" role="tab" aria-controls="others" aria-selected="false">その他</a></li>
</ul>
<!-- .nav-tabs -->
<div class="tab-content" id="informationTabContent">
<div class="tab-pane fade show active" id="news-list" role="tabpanel" aria-labelledby="news-tab">
<div class="news__list">
<?php
$args = [
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'news',
];
$news_posts = get_posts($args);
foreach ($news_posts as $post):
    setup_postdata($post);
?>
<a href="<?php the_permalink(); ?>">
<span class="font-serif"><?php the_time('Y.m.d'); ?></span>
<span>お知らせ</span>
<span><?php the_title(); ?></span>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="tab-pane fade" id="media-list" role="tabpanel" aria-labelledby="media-tab">
<div class="news__list">
<?php
$args = [
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'media',
];
$media_posts = get_posts($args);
foreach ($media_posts as $post):
    setup_postdata($post);
?>
<a href="<?php the_permalink(); ?>">
<span class="font-serif"><?php the_time('Y.m.d'); ?></span>
<span>メディア</span>
<span><?php the_title(); ?></span>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="tab-pane fade" id="others-list" role="tabpanel" aria-labelledby="others-tab">
<div class="news__list">
<?php
$args = [
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'others',
];
$others_posts = get_posts($args);
foreach ($others_posts as $post):
    setup_postdata($post);
?>
<a href="<?php the_permalink(); ?>">
<span class="font-serif"><?php the_time('Y.m.d'); ?></span>
<span>その他</span>
<span><?php the_title(); ?></span>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
</div>
<!-- .home-news-tabs -->
<div class="more-btn">
<a class="font-serif" href="<?php echo $home; ?>/information/">一覧を見る<i class="fas fa-caret-right ml-3"></i></a>
</div>
</div>
</section>

<section class="home-column py-5">
<img class="bg-icon" src="<?php echo $wp_url; ?>/dist/images/bg_icon.png" alt="kimono" srcset="<?php echo $wp_url; ?>/dist/images/bg_icon.png 1x, <?php echo $wp_url; ?>/dist/images/bg_icon@2x.png 2x">
<div class="container">
<h2 class="ttl-2 text-center"><span>column</span>コラム</h2>
<div class="column__list">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'column',
    'orderby' => 'date',
    'order' => 'DESC',
];
$others_posts = get_posts($args);
foreach ($others_posts as $post):
    setup_postdata($post);
?>
<article class="column__list-item mb-0">
<?php if (has_post_thumbnail()): ?>
<a href="<?php the_permalink(); ?>">
<picture class="column__list-thumbnail">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>">
</picture>
</a>
<span class="column__list-time"><?php the_time('Y.m.d'); ?></span>
<h3 class="column__list-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php endif; ?>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- .column__list -->
<div class="mt-5 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/column/">一覧を見る</a>
</div>
</div>
</section>
<?php get_footer();