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

<div class="pb-5 options">
<div class="container">

<div class="options-wrap">
<h3 class="ttl-opt font-serif">
<span>Option 01</span>
<span>着物にプラスで！</span>
</h3>
<div class="row mx-0">
<div class="col-md-3 mb-md-0 mb-3 px-md-3 px-0">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/op01_about_img.png" alt="あなただけの着物レンタル" srcset="<?php echo $wp_url; ?>/dist/images/op01_about_img.png 1x, <?php echo $wp_url; ?>/dist/images/op01_about_img@2x.png 2x">
</div>
<div class="col-md-9 px-md-3 px-0">
<p class="mb-0">特別な一日だからこそ、細部までこだわったお気に入りの和装スタイルで京都の街を歩きませんか?
<br>※レンタル着物プラン内にもセットで小物が付属しております。
<br>※以下の小物類はプラン料金+別途にてご利用いただけるオプションとなります。</p>
</div>
</div>
<div class="plan-single__option__list mt-5">
<div class="plan__list">
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_hair.png" alt="オーダーメイドヘアセット" srcset="<?php echo $wp_url; ?>/dist/images/op_hair.png 1x, <?php echo $wp_url; ?>/dist/images/op_hair@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3>オーダーメイド<br>ヘアセット</h3>
<p>プロのスタイリストが崩れにくく、かわいいヘアアレンジをいたします。ご希望のスタイルがある方は、ぜひ写真をもってお越しください！</p>
<p class="price">+<span>1,500</span>円</p>
</div>
</div>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_kin.png" alt="金襴帯" srcset="<?php echo $wp_url; ?>/dist/images/op_kin.png 1x, <?php echo $wp_url; ?>/dist/images/op_kin@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3>金襴帯</h3>
<p>金の模様・金の加工・金の刺繍が入った高級感のある帯で、着物をさらに華やかに演出いたします。</p>
<p class="price">+<span>500</span>円</p>
</div>
</div>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_kazari.png" alt="髪飾り付け放題" srcset="<?php echo $wp_url; ?>/dist/images/op_kazari.png 1x, <?php echo $wp_url; ?>/dist/images/op_kazari@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3>髪飾り付け放題</h3>
<p>ヘアセットしたあなたをよりきれいに。着物と一体になり、より和服美人を演出いたします。どれだけ選んで頂いても付け放題なので、安心・満足！</p>
<p class="price">+<span>500</span>円</p>
</div>
</div>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op_obi.png" alt="帯飾り" srcset="<?php echo $wp_url; ?>/dist/images/op_obi.png 1x, <?php echo $wp_url; ?>/dist/images/op_obi@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3>帯飾り</h3>
<p>帯まわりに付けるアクセサリーです。着物美人をより華やかに演出。ちょっとしたアクセントで差をつけちゃおう!</p>
<p class="price">+<span>500</span>円</p>
</div>
</div>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/opt_boots.jpg" alt="ブーツ" srcset="<?php echo $wp_url; ?>/dist/images/opt_boots.jpg 1x, <?php echo $wp_url; ?>/dist/images/opt_boots@2x.jpg 2x">
</div>
<div class="plan__list-item-txt full">
<h3>ブーツ</h3>
<p>袴はもちろん、着物に合わせてレトロ風に着こなしても素敵です。草履に比べて歩きやすいので、京都市内をぐるっと散策される方にもおすすめ。!</p>
<p class="price">+<span>500</span>円</p>
</div>
</div>
</div>
</div>
</div>
<!-- .options-wrap -->
<div id="photoplan" class="options-wrap orange">
<h3 class="ttl-opt font-serif">
<span>Option 02</span>
<span>撮影サービス</span>
</h3>
<div class="row mx-0">
<div class="col-md-4 mb-md-0 mb-3 px-md-3 px-0">
<img src="<?php echo $wp_url; ?>/dist/images/op02_about_img.png" alt="撮影サービス" srcset="<?php echo $wp_url; ?>/dist/images/op02_about_img.png 1x, <?php echo $wp_url; ?>/dist/images/op02_about_img@2x.png 2x">
</div>
<div class="col-md-8 px-md-3 px-0">
<p class="mb-0">着物姿で京都での思い出写真を残してみませんか？
<br>当店では京都随一のおしゃれで広い撮影スタジオを併設しており、プロのカメラマンが本格的な撮影を行います。
<br>1名様での撮影だけでなく、カップルやお友達同士。ご家族での撮影が可能です。</p>
</div>
</div>
<div class="plan-single__option__list mt-5">
<div class="plan__list">
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op02_lo.png" alt="オーダーメイドヘアセット" srcset="<?php echo $wp_url; ?>/dist/images/op02_lo.png 1x, <?php echo $wp_url; ?>/dist/images/op02_lo@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3><span><i>京都祇園店 限定</i></span>ロケーション<br>フォトプラン</h3>
<p>撮影データ付きの着物レンタルプランです。京都の観光案内も兼ねて撮影致します。</p>
<p class="price">+<span>18,000</span>円〜</p>
</div>
</div>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op02_st.png" alt="金襴帯" srcset="<?php echo $wp_url; ?>/dist/images/op02_st.png 1x, <?php echo $wp_url; ?>/dist/images/op02_st@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3><span><i>京都四条本店 限定</i></span>スタジオ写真撮影</h3>
<p>京都観光の記念に、スタジオでカメラマンが撮影致します。写真はアルバムにしてお渡し致しますので、思い出を形として残すことができます。</p>
<p class="price">+<span>2,500</span>円</p>
<img src="<?php echo $wp_url; ?>/dist/images/opt_stamp.png" alt="オリジナルアルバム作成" srcset="<?php echo $wp_url; ?>/dist/images/opt_stamp.png 1x, <?php echo $wp_url; ?>/dist/images/opt_stamp@2x.png 2x">
</div>
</div>
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op02_ch.png" alt="髪飾り付け放題" srcset="<?php echo $wp_url; ?>/dist/images/op02_ch.png 1x, <?php echo $wp_url; ?>/dist/images/op02_ch@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3><span><i>京都四条本店 限定</i></span>クロマキー合成<br>写真撮影</h3>
<p>最先端の写真加工技術をお手頃価格で体験!四季折々の観光名所を背景に撮影したような写真が出来上がります！</p>
<p class="price">+<span>1,500</span>円</p>
</div>
</div>
</div>
</div>
<div class="warning font-serif mt-4">
<p class="warning-ttl">ご注意事項</p>
<div class="warning__box">
<p class="mb-2">スタジオ撮影/クロマキー合成写真撮影について</p>
<ul class="small pl-3">
<li>京都四条本店限定となっております。</li>
<li>事前予約必須です。</li>
<li>オリジナルアルバム/写真データは当日お渡しとなります。</li>
</ul>
<p class="mb-2">ロケーション撮影について</p>
<ul class="small pl-3 mb-0">
<li>事前予約制です。※天候具合等を考慮してのキャンセルは、3日前までにお願いします。</li>
<li>撮影終了後も返却時間までレンタル着物をご利用いただけます。</li>
<li>事前予約必須です。</li>
</ul>
</div>
</div>
</div>
<!-- .options-wrap -->
<div id="storage" class="options-wrap blue">
<h3 class="ttl-opt font-serif">
<span>Option 03</span>
<span>荷物預かりサービス</span>
</h3>
<div class="row mx-0">
<div class="col-md-4 mb-md-0 mb-3 px-md-3 px-0">
<img src="<?php echo $wp_url; ?>/dist/images/op03_about_img.png" alt="荷物預かりサービス" srcset="<?php echo $wp_url; ?>/dist/images/op03_about_img.png 1x, <?php echo $wp_url; ?>/dist/images/op03_about_img@2x.png 2x">
</div>
<div class="col-md-8 px-md-3 px-0">
<p class="mb-0">遠方からお越しの方も安心！手ぶらで京都観光をお楽しみいただけます。</p>
</div>
</div>
<div class="options__items">
<div class="options__items-item mb-3">
<h4>ホテル返却<span><i>京都四条本店・京都祇園店 限定</i></span></h4>
<p>宿泊されるホテルのフロントへ【翌日10:00迄】にご返却下さい。
<br>お預かりしたお荷物は宿泊先のホテルへ当日18:00迄にお運び致します。
<br>※ホテル返却の申込の受付時間は14:00迄です。
<br>※京都市内の宿泊施設(ホテル・旅館)に限ります。
<br>※フロントの無い宿泊施設はご利用いただけない場合があります。</p>
<div class="text-center mt-2">
<img src="<?php echo $wp_url; ?>/dist/images/flow_06_3.png" alt="ホテル返却" srcset="<?php echo $wp_url; ?>/dist/images/flow_06_3.png 1x, <?php echo $wp_url; ?>/dist/images/flow_06_3@2x.png 2x">
</div>
<p class="price">+<span class="text-info">1,500</span>円(税抜)/1名様</p>
</div>
<div class="options__items-item">
<h4>翌日返却</h4>
<p>４店舗のいずれかの店に【翌日18:00迄】にご返却下さい。ご出発時はお荷物も一緒にお持ち頂きます。
<br>※出発前に身分証明書の確認/コピーを致しますのでご了承下さい。</p>
<div class="text-center mt-2">
<img src="<?php echo $wp_url; ?>/dist/images/flow_06_2.png" alt="ホテル返却" srcset="<?php echo $wp_url; ?>/dist/images/flow_06_2.png 1x, <?php echo $wp_url; ?>/dist/images/flow_06_2@2x.png 2x">
</div>
<p class="price">+<span class="text-info">1,000</span>円〜(税抜)/1名様</p>
</div>
</div>
</div>
<!-- .options-wrap -->
<div class="options-wrap pink">
<h3 class="ttl-opt font-serif">
<span>Option 04</span>
<span>パペポパック</span>
</h3>
<div class="row mx-0">
<div class="col-md-4 mb-md-0 mb-3 px-md-3 px-0">
<img src="<?php echo $wp_url; ?>/dist/images/op04_about_img.png" alt="パペポパック" srcset="<?php echo $wp_url; ?>/dist/images/op04_about_img.png 1x, <?php echo $wp_url; ?>/dist/images/op04_about_img@2x.png 2x">
</div>
<div class="col-md-8 px-md-3 px-0">
<p class="mb-0">今京都で人気のフォトジェニックスポット『パペポミュージアム』(papepo-museum)に割引価格で入場することができる京あるきだけのオプションメニュー！
<br>パペポミュージアムは京あるきと同じフロアなので着付けてもらってすぐに入場もOK！
<br>パペポミュージアムの入場料が、京あるきの着物レンタルと一緒にご予約いただくと、通常価格1,200円(税込)が特別価格¥600円(税込)で入場可能になるお得なパックです！</p>
</div>
</div>
<!-- <div class="plan-single__option__list mt-5">
<div class="plan__list">
<div class="plan__list-item">
<div class="plan__list-item-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/op04_p.png" alt="パペポパック" srcset="<?php echo $wp_url; ?>/dist/images/op04_p.png 1x, <?php echo $wp_url; ?>/dist/images/op04_p@2x.png 2x">
</div>
<div class="plan__list-item-txt full">
<h3>パペポパック</h3>
<p>京都で話題の人気スポットパペポミュージアムの入場料と着物レンタルの料金がセットでお得になるプランです。インスタ映えを狙いたい人は必見です。</p>
<p class="price">+<span>600</span>円〜</p>
</div>
</div>
</div>
</div> -->
</div>
<!-- .options-wrap -->
</div>
</div>

<?php get_footer();