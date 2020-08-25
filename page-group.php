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

<div class="pb-5">
<div class="container">
<div class="row mx-0">
<div class="col-md-4 mb-md-0 mb-3 px-md-3 px-0">
<img src="<?php echo $wp_url; ?>/dist/images/group_img.png" alt="あなただけの着物レンタル" srcset="<?php echo $wp_url; ?>/dist/images/group_img.png 1x, <?php echo $wp_url; ?>/dist/images/group_img@2x.png 2x">
</div>
<div class="col-md-8 px-md-3 px-0">
<p class="mb-0">団体旅行で着物を着て京都観光されたり着物を通じて日本の文化を満喫されるだけでなく、企業や会合の集会、催し物、イベントとして活用いただける団体様のための和装(レンタル着物)体験です。</p>
</div>
</div>
</div>
</div>

<section class="pt-5">
<div class="container">
<h2 class="ttl-2 text-center"><span>Point</span>団体プランがおすすめの理由</h2>
<div class="home-point__list">

<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/g_point_01.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/g_point_01.png 1x, <?php echo $wp_url; ?>/dist/images/g_point_01@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 01</h3>
<p class="font-serif">『京都最大級の超大型店舗』</p>
<p class="small bg-0 text-center">京都四条本店は<br>1時間で300名まで着付可能。</p>
</div>
</div>
<!-- .home-point__list__inner -->

<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/g_point_02.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/g_point_02.png 1x, <?php echo $wp_url; ?>/dist/images/g_point_02@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 02</h3>
<p class="font-serif">『祗園東山エリア最大級の大型店舗』</p>
<p class="small bg-0 text-center">京都祇園店は<br>八坂の塔、高台寺、清水寺観光に便利。</p>
</div>
</div>
<!-- .home-point__list__inner -->

<div class="home-point__list__inner">
<div class="home-point__list__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/g_point_03.png" alt="京あるきが選ばれるポイント" srcset="<?php echo $wp_url; ?>/dist/images/g_point_03.png 1x, <?php echo $wp_url; ?>/dist/images/g_point_03@2x.png 2x">
</div>
<div class="home-point__list__inner-txt">
<h3 class="font-serif">POINT 02</h3>
<p class="font-serif">『ホテル返却無料サービス』</p>
<p class="small bg-0 text-center">京都市内・大津市内ホテルへお泊りの<br>団体様は翌日着物をフロントへ返却。</p>
</div>
</div>
<!-- .home-point__list__inner -->

</div>
<!-- .home-point__list -->
</div>
</section>

<section class="py-5">
<div class="container">
<h2 class="ttl-2 text-center"><span>PLAN</span>団体用プラン</h2>
<div class="group__plan">
<div class="group__plan-inner">
<h3 class="font-serif group__plan-ttl">店内着付プラン</h3>
<p class="group__plan-txt">京あるきの店舗にお越しいただき着付を行います。<br>京都最大級の大型店舗である京都四条本店は、300名の着付が可能ですので人数の心配なく着付が行なえます。</p>
<div class="group__plan-box">
<p>返却方法をお選びいただけます。</p>
<ul>
<li>店内で着替えて、着物返却。</li>
<li>ホテルで着替えて、フロントへ着物返却。</li>
</ul>
</div>
<p class="font-serif group__plan-price">2,546<small>円</small></p>
</div>
<div class="group__plan-inner">
<h3 class="font-serif group__plan-ttl text-info">ホテル着付プラン</h3>
<p class="group__plan-txt">お泊りのホテルにスタッフが行き、その場で着付けをいたします。荷物の心配もなく手軽に着物レンタルを体験することができます。</p>
<div class="group__plan-box">
<p>返却方法をお選びいただけます。</p>
<ul>
<li>店内で着替えて、着物返却。</li>
<li>ホテルで着替えて、フロントへ着物返却。</li>
</ul>
</div>
<p class="font-serif group__plan-price"><span class="text-info">3,000</span><small>円</small></p>
</div>
</div>
<div class="group__plan__price">
<div class="group__plan__price-balloon">
<p>団体プランでは<br><span>どの着物も追加料金無し</span>で<br>お選びいただけます。</p>
</div>
<table class="group__plan__price-table font-serif">
<thead>
<tr>
<th>通常料金</th>
<th>団体価格</th>
</tr>
</thead>
<tbody>
<tr>
<td rowspan="2">
<p>スタンダード着物/浴衣プラン<br>2,990<small>円[税別]</small></p>
<p>ハイグレード着物/浴衣プラン<br>3,990<small>円[税別]</small></p>
<p class="mb-0">プレミアム着物プラン<br>4,990<small>円[税別]</small></p>
</td>
<td class="bg">
<p class="mb-0">店内着付プラン<br><span class="text-warning">2,546</span><small>円[税別]</small></p>
</td>
</tr>
<tr>
<td class="bg">
<p class="mb-0">ホテル着付プラン<br><span class="text-info">3,000</span><small>円[税別]</small></p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>

<section class="py-5 bg-light">
<div class="container">
<h2 class="ttl-2 text-center"><span>option</span>オプション</h2>
<div class="plan__list">
<div class="plan__list-item no-img">
<div class="plan__list-item-txt">
<h3>お荷物お預かり</h3>
<p class="price"><span>無料</span></p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</div>
<div class="plan__list-item no-img">
<div class="plan__list-item-txt">
<h3>ホテル返却</h3>
<p class="price"><span>無料</span></p>
</div>
<div class="plan__list-item-arrow"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
</section>

<section class="py-5 group__special">
<div class="container">
<h2>団体のお客様だけの！<span class="font-serif">団体特典</span></h2>
<div class="group__special__list">
<div class="group__special__list-item">
<span></span>
<h3 class="font-serif">金襴帯へのグレードアップが<span class="text-danger">無料</span></h3>
<p class="mb-0">通常500円の金襴帯への変更が無料でご利用いただけます。セットに含まれている帯を金襴帯にグレードアップして、より華やかな着物姿に！</p>
</div>
<div class="group__special__list-item">
<span></span>
<h3 class="font-serif">髪飾り購入者ヘアセット<span class="text-danger">無料</span></h3>
<p class="mb-0">新品髪飾を購入されたお客様に通常1名様1,500円の簡易ヘアセットを無料でご利用いただけます。</p>
</div>
<div class="group__special__list-item">
<span></span>
<h3 class="font-serif">ホテル返却<span class="text-danger">無料</span></h3>
<p class="mb-0">1名様通常1,500円のホテル返却（京都市内・大津市内）が無料でご利用いただけます。</p>
</div>
<div class="group__special__list-item">
<span></span>
<h3 class="font-serif">早朝料金<span class="text-danger">無料</span></h3>
<p class="mb-0">早朝7時～10時の営業時間外の着付を団体のお客様のみ無料で行っております。</p>
</div>
</div>
</div>
</section>

<section class="py-5 group__culture">
<div class="container">
<h2 class="font-serif">一緒に文化体験も！</h2>
<div class="row justify-content-center mx-0 d-md-none mb-3">
<div class="col text-center px-1">
<img src="<?php echo $wp_url; ?>/dist/images/taiken_1.png" alt="文化体験" srcset="<?php echo $wp_url; ?>/dist/images/taiken_1.png 1x, <?php echo $wp_url; ?>/dist/images/taiken_1@2x.png 2x">
</div>
<div class="col text-center px-1">
<img src="<?php echo $wp_url; ?>/dist/images/taiken_2.png" alt="文化体験" srcset="<?php echo $wp_url; ?>/dist/images/taiken_2.png 1x, <?php echo $wp_url; ?>/dist/images/taiken_2@2x.png 2x">
</div>
</div>
<div class="group__culture__box mb-3">
<p class="group__culture__box-ttl">体験内容</p>
<div class="group__culture__box-content">
<p class="mb-0">・茶道体験<br>・折り紙体験</p>
</div>
</div>
<div class="group__culture__box mb-3">
<p class="group__culture__box-ttl">価格</p>
<div class="group__culture__box-content">
<p class="mb-2"><span class="badge badge-danger py-1 px-2 mr-3">15名～</span>1名様　+1,100円(税込)</p>
<p class="mb-0"><span class="badge badge-danger py-1 px-2 mr-3">7名～14名</span>1名様　+1,570円(税込)</p>
</div>
</div>
<p class="small mb-0">※茶道 or 折紙体験のみは1名様2,000円(税込)になります。<br>※完全予約制となります。<br>※中国語/英語/韓国語通訳可能</p>
</div>
</section>

<section class="py-5 group__details">
<div class="container">
<h2 class="ttl-2 text-center"><span>details</span>団体プラン詳細</h2>
<div class="group__details-wrap">
<h3 class="font-serif">体験の流れ</h3>
<ol class="count">
<li>到着/着物選び<span>5～10分</span></li>
<li>着付<span>10分</span></li>
<li>髪飾り検討<span>3分</span></li>
<li>簡易ヘアセット<span>5分</span></li>
<li>出発</li>
</ol>
</div>
<div class="group__details-wrap mt-4">
<h3 class="font-serif">体験の流れ</h3>
<p class="mb-0">当日現金支払 / 月末振込 / クーポン</p>
</div>
<div class="group__details-wrap mt-4">
<h3 class="font-serif">キャンセル規定</h3>
<p class="mb-0">キャンセルの場合、予約日の3日前（18時）以降は、100％キャンセル料金を頂きます。
<br>最終のご予約（前日18時迄）人数から、当日3名様迄のキャンセルはキャンセル料金を無料で対応させていただきます。</p>
</div>
<div class="group__details-wrap mt-4">
<h3 class="font-serif">パーキングエリア情報</h3>
<div class="row">
<div class="col-md mb-md-0 mb-4">
<p>・京都四条本店</p>
<p class="mb-0"><img src="<?php echo $wp_url; ?>/dist/images/p_sijo.png" alt="地図" srcset="<?php echo $wp_url; ?>/dist/images/p_sijo.png 1x, <?php echo $wp_url; ?>/dist/images/p_sijo@2x.png 2x"></p>
</div>
<div class="col-md">
<p>・京都祇園店</p>
<p class="mb-0"><img src="<?php echo $wp_url; ?>/dist/images/p_kiyomizu.png" alt="地図" srcset="<?php echo $wp_url; ?>/dist/images/p_kiyomizu.png 1x, <?php echo $wp_url; ?>/dist/images/p_kiyomizu@2x.png 2x"></p>
</div>
</div>
</div>
<div class="group__details-wrap mt-4">
<h3 class="font-serif">提携の国内旅行会社(2020年7月1日現在)</h3>
<p class="mb-0">JTBグループ・KNT-CTホールディングス(近畿日本ツーリスト・クラブツーリズム)・HISグループ・JR東海ツアーズ・阪急交通社・日本旅行・東武トップツアーズ・読売旅行・農協観光・名鉄観光・東日観光・西鉄旅行　etc</p>
</div>
</div>
</section>

<section class="py-5 bg-light group__booking">
<div class="container text-center">
<h2 class="ttl-2 text-center mb-4"><span>Booking</span>団体プランのご予約</h2>
<p class="group__booking-tel font-serif">
<a href="tel:075-241-5776">TEL<span class="text-danger">075-241-5776</span></a>
</p>
<p>
<a class="btn btn-danger" href="mailto:kimono-rental@saganokan.com">メールでのご予約はこちら<br><small>kimono-rental@saganokan.com</small></a>
</p>
<p class="group__booking-fax">
<span>FAXでのご予約は 075-241-5776</span>
</p>
<p class="mb-0">お問い合わせから24時間以内にご返信いたします。</p>
</div>
</section>
<?php get_footer();
