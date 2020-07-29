<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
<h1>京都観光にぴったりな<br>着物・浴衣レンタル店 京あるき</h1>
<div class="header-logo">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x">
</a>
</div>

<nav class="header__nav">
<div class="header__nav-language">
<select class="form-control">
<option>Languages</option>
<option>日本語</option>
<option>English</option>
<option>簡体中文</option>
<option>繁體中文</option>
</select>
</div>
<ul class="header__nav-list">
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/point/"><span class="playfair text-danger text-uppercase">point</span>おすすめポイント</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/plan/"><span class="playfair text-danger text-uppercase">plan</span>プラン一覧</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/option/"><span class="playfair text-danger text-uppercase">option</span>オプションサービス</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/flow/"><span class="playfair text-danger text-uppercase">flow</span>着物レンタルの流れ</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/shop/"><span class="playfair text-danger text-uppercase">shop</span>店舗一覧</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/faq/"><span class="playfair text-danger text-uppercase">faq</span>よくあるご質問</a></li>
<li class="header__nav-item"><a class="header__nav-link" href="<?php echo $home; ?>/group/"><span class="playfair text-danger text-uppercase">group</span>団体のお客様へ</a></li>
</ul>
<div class="header__nav-btn mt-3">
<a class="btn btn-block btn-danger" href="<?php echo $home; ?>">WEB予約</a>
</div>
</nav>

</header>

<main>
