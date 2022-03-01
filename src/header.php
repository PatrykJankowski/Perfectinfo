<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#007FFF">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/perfectinfo/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/wp-content/themes/perfectinfo/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/wp-content/themes/perfectinfo/img/favicon-16x16.png" sizes="16x16">

    <link rel="stylesheet" href="/wp-content/themes/perfectinfo/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="navbar">
    <div class="container d-flex h-100">
        <a class="navbar__logo-link" href="/" title="Perfectinfo" aria-label="Perfectinfo">
            <img class="navbar__logo" width="197" height="52" src="/wp-content/themes/perfectinfo/img/logo.webp">
        </a>

        <nav class="navbar__nav-desktop">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
        </nav>

        <nav id="navbar__nav-mobile" class="navbar__nav-mobile">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu-mobile', 'container' => false)); ?>
        </nav>

        <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i></div>
    </div>
</header>

<main>
