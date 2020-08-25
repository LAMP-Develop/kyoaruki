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

<div class="flow__list">
<div class="flow__list-item">
<span class="ribbon font-serif">01</span>
<h3 class="font-serif">ご予約</h3>
<div class="flow__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/flow_01.png" alt="ご予約" srcset="<?php echo $wp_url; ?>/dist/images/flow_01.png 1x, <?php echo $wp_url; ?>/dist/images/flow_01@2x.png 2x">
</div>
<p>Web予約orお電話にて希望日時をお伝えください。<br>事前にご予約頂いたレンタルプランやオプションは『当日に変更可能で安心！』です。<br>当日予約はお電話にてご連絡下さい。</p>
</div>
<!-- .flow__list-item -->
<div class="flow__list-item">
<span class="ribbon font-serif">02</span>
<h3 class="font-serif">ご来店</h3>
<div class="flow__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/flow_02.png" alt="ご来店" srcset="<?php echo $wp_url; ?>/dist/images/flow_02.png 1x, <?php echo $wp_url; ?>/dist/images/flow_02@2x.png 2x">
</div>
<p>ご予約頂いた店舗・日時にご来店下さい。<br>店舗の詳しい場所はアクセスをご覧下さい。<br>受付にて予約時間とお名前をお伝えください。靴やお荷物用の保管バックをお渡し致します。</p>
</div>
<!-- .flow__list-item -->
<div class="flow__list-item">
<span class="ribbon font-serif">03</span>
<h3 class="font-serif">着物・帯・小物選び</h3>
<div class="flow__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/flow_03.png" alt="着物・帯・小物選び" srcset="<?php echo $wp_url; ?>/dist/images/flow_03.png 1x, <?php echo $wp_url; ?>/dist/images/flow_03@2x.png 2x">
</div>
<p>1,000点以上の着物を様々なプランでご用意しております。<br>モダン系、アンティーク系、かわいい系、かっこいい系、など、上質な着物をたくさん取り揃えております。<br>店内で、プラン変更も可能ですので、実際にご覧いただいてお選びください！<br>迷った場合は知識豊富なスタッフがアドバイスをさせて頂きますのでご安心下さい！</p>
</div>
<!-- .flow__list-item -->
<div class="flow__list-item">
<span class="ribbon font-serif">04</span>
<h3 class="font-serif">着付</h3>
<div class="flow__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/flow_04.png" alt="着付" srcset="<?php echo $wp_url; ?>/dist/images/flow_04.png 1x, <?php echo $wp_url; ?>/dist/images/flow_04@2x.png 2x">
</div>
<p>当店の厳しい審査の着付試験を合格した、着付のプロのみが担当。<br>着物に慣れていない人も苦しく疲れないように丁寧に着付を致します。<br>プロによる着付なので、着くずれの心配もなく安心です。</p>
<p class="text-center text-danger font-weight-bold h5 my-4"><i class="fas fa-plus"></i></p>
<div class="flow__list-item-option">
<p class="text-center text-danger text-uppercase font-weight-bold font-serif">option</p>
<h4 class="mb-0 font-serif">ヘアセット</h4>
<p class="small text-center">※事前予約優先</p>
<div class="flow__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/flow_04_1.png" alt="ヘアセット" srcset="<?php echo $wp_url; ?>/dist/images/flow_04_1.png 1x, <?php echo $wp_url; ?>/dist/images/flow_04_1@2x.png 2x">
</div>
<p class="mb-0">店内にはプロの美容師が常にスタンバイしております。<br>お客様のオーダーメイドのヘアスタイルをお伺いします。<br>また、着物に似合う本格ヘアスタイルのパターンからもお選び頂けます。<br>パターンからアレンジも可能です。</p>
</div>
<div class="flow__list-item-option mt-4">
<p class="text-center text-danger text-uppercase font-weight-bold font-serif">option</p>
<h4 class="mb-0 font-serif">写真撮影</h4>
<p class="small text-center">※事前予約優先</p>
<div class="flow__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/flow_04_2.png" alt="写真撮影" srcset="<?php echo $wp_url; ?>/dist/images/flow_04_2.png 1x, <?php echo $wp_url; ?>/dist/images/flow_04_2@2x.png 2x">
</div>
<div class="mt-3">
<p><span class="font-serif border p-1">京都四条本店</span></p>
<h4 class="font-serif text-danger text-base text-md-center mt-3">本格スタジオ撮影</h4>
<p>店舗内に完備された専用のスタジオで撮影が出来ます。<br>プロのカメラマンが撮影する美しい着物姿を写真で思い出に残しませんか？</p>
</div>
<div class="mt-4">
<p><span class="font-serif border p-1">京都祇園店</span></p>
<h4 class="font-serif text-danger text-base text-md-center mt-3">ロケーション撮影</h4>
<p>プロのカメラマンが同行して素敵な写真で思い出に残しませんか？<br>京都の写真映えするスポットや穴場スポットへ誘導致します。</p>
</div>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/option#photoplan">詳しく見る</a>
</div>
</div>
</div>
<!-- .flow__list-item -->
<div class="text-center">
<img src="<?php echo $wp_url; ?>/dist/images/flow_05.png" alt="出発" srcset="<?php echo $wp_url; ?>/dist/images/flow_05.png 1x, <?php echo $wp_url; ?>/dist/images/flow_05@2x.png 2x">
</div>
<div class="flow__list-item mt-4 return">
<span class="ribbon font-serif">06</span>
<h3 class="font-serif">返却方法は選べる<span>3</span>パターン</h3>
<div class="flow__list-item__inner">
<h4 class="font-serif">当日返却</h4>
<p class="text-left">レンタルしたお店に【当日18:00迄】にお戻り下さい。</p>
<p class="text-center my-3">
<img src="<?php echo $wp_url; ?>/dist/images/flow_06_1.png" alt="当日返却" srcset="<?php echo $wp_url; ?>/dist/images/flow_06_1.png 1x, <?php echo $wp_url; ?>/dist/images/flow_06_1@2x.png 2x">
</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/option#storage">詳しく見る</a>
</div>
</div>
<div class="flow__list-item__inner">
<h4 class="font-serif">翌日返却</h4>
<p class="text-left">４店舗のいずれかの店に【翌日18:00迄】にご返却下さい。ご出発時はお荷物も一緒にお持ち頂きます。</p>
<p class="text-center my-3">
<img src="<?php echo $wp_url; ?>/dist/images/flow_06_2.png" alt="翌日返却" srcset="<?php echo $wp_url; ?>/dist/images/flow_06_2.png 1x, <?php echo $wp_url; ?>/dist/images/flow_06_2@2x.png 2x">
</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/option#storage">詳しく見る</a>
</div>
</div>
<div class="flow__list-item__inner">
<h4 class="font-serif">ホテル返却</h4>
<p class="text-left">宿泊されるホテルのフロントへ【翌日10:00迄】にご返却下さい。
<br>お預かりしたお荷物は宿泊先のホテルへ当日18:00迄にお運び致します。
<br>※ホテル返却の申込の受付時間は14:00迄です。
<br>※京都市内の宿泊施設(ホテル・旅館)に限ります。
<br>※フロントの無い宿泊施設はご利用いただけない場合があります。</p>
<p class="text-center my-3">
<img src="<?php echo $wp_url; ?>/dist/images/flow_06_3.png" alt="ホテル返却" srcset="<?php echo $wp_url; ?>/dist/images/flow_06_3.png 1x, <?php echo $wp_url; ?>/dist/images/flow_06_3@2x.png 2x">
</p>
<div class="mt-4 text-center">
<a class="btn btn-outline-light" href="<?php echo $home; ?>/option#storage">詳しく見る</a>
</div>
</div>
</div>
<!-- .flow__list-item -->
</div>
<!-- .flow__list -->
</div>
</div>

<?php get_footer();
