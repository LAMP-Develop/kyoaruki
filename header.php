<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="京都,着物,浴衣,レンタル">
<?php wp_head(); ?>

<?php if (!is_page(['reserve', 'booking-form', 'booking-thanks'])): ?>
<style>
.fixed-btn {
  z-index: 2;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0.5rem;
  background-color: rgba(255, 255, 255, 0.1);
}
@media (min-width: 991.97px) {
  .fixed-btn {
    display: none;
  }
}
</style>
<?php endif; ?>

<!-- End Google Tag Manager -->
<script>
(function(w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({
    'gtm.start': new Date().getTime(),
    event: 'gtm.js'
  });
  var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s),
    dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
  f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-W7ZDM9');
</script>

<!-- yjtag -->
<script id="tagjs">
(function() {
  var tagjs = document.createElement("script");
  var s = document.getElementsByTagName("script")[0];
  tagjs.async = true;
  tagjs.src = "https://s.yjtag.jp/tag.js#site=acq1zsj";
  s.parentNode.insertBefore(tagjs, s);
}());
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7ZDM9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- yjtag -->
<noscript>
<iframe src="https://b.yjtag.jp/iframe?c=acq1zsj" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>

<a class="sr-only sr-only-focusable" href="#main-content">Skip to main content</a>

<header class="header">
<h1>京都観光にぴったりな<br>着物・浴衣レンタル店 京あるき</h1>
<div class="header-logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x">
</a>
</div>

<div class="btn-trigger-calendar" id="calendar-btn">
<img src="<?php echo $wp_url; ?>/dist/images/btn_calendar.png" alt="店舗予約" srcset="<?php echo $wp_url; ?>/dist/images/btn_calendar.png 1x, <?php echo $wp_url; ?>/dist/images/btn_calendar@2x.png 2x">
</div>

<div class="btn-trigger" id="hum-btn">
<span></span>
<span></span>
<span></span>
</div>

<nav class="header__nav" id="navbar">
<!-- <div class="header__nav-language">
<select class="form-control">
<option>Languages</option>
<option>日本語</option>
<option>English</option>
<option>簡体中文</option>
<option>繁體中文</option>
</select>
</div> -->
<div class="header__nav-sns d-md-none">
<a class="text-danger h5" href="https://www.instagram.com/kimono_rental/" target="_blank"><i class="fab fa-instagram"></i></a>
<a class="text-danger h5 mx-4" href="https://twitter.com/kyo_aruki" target="_blank"><i class="fab fa-twitter"></i></a>
<a class="text-danger h5" href="https://www.facebook.com/kyoaruki.kimono" target="_blank"><i class="fab fa-facebook"></i></a>
</div>
<ul class="header__nav-list">
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/point/"><span class="playfair text-danger text-uppercase">point</span>おすすめポイント</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/plan-list/"><span class="playfair text-danger text-uppercase">plan</span>プラン一覧</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/option/"><span class="playfair text-danger text-uppercase">option</span>オプションサービス</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/flow/"><span class="playfair text-danger text-uppercase">flow</span>着物レンタルの流れ</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/shop/"><span class="playfair text-danger text-uppercase">shop</span>店舗一覧</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/faq/"><span class="playfair text-danger text-uppercase">faq</span>よくあるご質問</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/group/"><span class="playfair text-danger text-uppercase">group</span>団体のお客様へ</a></li>
</ul>
<div class="header__nav-btn mt-3 d-md-block d-none">
<a class="btn btn-block btn-danger" href="<?php echo $home; ?>/reserve/">WEB予約</a>
</div>
</nav>

<div class="reserve-menu">
<div class="reserve-menu-item">
<p class="mb-2 font-serif">京都四条本店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:075-213-7171"><i class="fas fa-phone-alt mr-2"></i>075-213-7171</a></p>
</div>
<div class="reserve-menu-item">
<p class="mb-2 font-serif">京都祇園店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:075-541-7761"><i class="fas fa-phone-alt mr-2"></i>075-541-7761</a></p>
</div>
<div class="reserve-menu-item">
<p class="mb-2 font-serif">大阪梅田店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:06-6374-5589"><i class="fas fa-phone-alt mr-2"></i>06-6374-5589</a></p>
</div>
<div class="reserve-menu-item">
<p class="mb-2 font-serif">大阪なんば店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:06-6633-2150"><i class="fas fa-phone-alt mr-2"></i>06-6633-2150</a></p>
</div>
<div class="reserve-menu-btn w-100">
<a class="bg-danger text-white w-100 d-block p-3 text-center font-serif" href="<?php echo $home; ?>/reserve/">WEB予約<i class="fas fa-chevron-circle-right ml-3"></i></a>
</div>
</div>

</header>

<main id="main-content">
