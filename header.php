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
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
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
<div class="header__nav-tel d-md-none">
<div class="header__nav-tel-item">
<p class="small mb-2 font-serif">京都四条本店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:075-213-7171"><i class="fas fa-phone-alt mr-2"></i>075-213-7171</a></p>
</div>
<div class="header__nav-tel-item">
<p class="small mb-2 font-serif">京都祇園店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:075-541-7761"><i class="fas fa-phone-alt mr-2"></i>075-541-7761</a></p>
</div>
</div>
</nav>

<div class="reserve-menu">
<div class="reserve-menu-item">
<p class="small mb-2 font-serif">京都四条本店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:075-213-7171"><i class="fas fa-phone-alt mr-2"></i>075-213-7171</a></p>
</div>
<div class="reserve-menu-item">
<p class="small mb-2 font-serif">京都祇園店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:075-541-7761"><i class="fas fa-phone-alt mr-2"></i>075-541-7761</a></p>
</div>
<div class="reserve-menu-item">
<p class="small mb-2 font-serif">大阪梅田店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:06-6374-5589"><i class="fas fa-phone-alt mr-2"></i>06-6374-5589</a></p>
</div>
<div class="reserve-menu-item">
<p class="small mb-2 font-serif">大阪なんば店</p>
<p class="m-0"><a class="text-danger font-serif" href="tel:06-6633-2150"><i class="fas fa-phone-alt mr-2"></i>06-6633-2150</a></p>
</div>
<div class="reserve-menu-btn w-100">
<a class="bg-danger text-white w-100 d-block p-3 text-center font-serif" href="<?php echo $home; ?>/reserve/">WEB予約<i class="fas fa-chevron-circle-right ml-3"></i></a>
</div>
</div>

</header>

<main id="main-content">
