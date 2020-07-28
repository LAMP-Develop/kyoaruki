<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php wp_head(); ?>

<?php if (!is_user_logged_in()): ?>
<!-- トラッキングコード -->
<?php endif; ?>
</head>

<body>
<?php wp_body_open(); ?>

<header>
</header>

<main>
