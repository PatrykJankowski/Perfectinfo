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

    <link href="https://www.googletagmanager.com/gtm.js?id=GTM-WSB34T7" rel="preload" as="script">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com/" >

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WSB34T7');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="navbar">
    <div class="container d-flex h-100">
        <a class="navbar__logo-link" href="/" title="Perfectinfo" aria-label="Perfectinfo">
            <svg class="navbar__logo" width="197" height="52" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 315 82.5" style="enable-background:new 0 0 315 82.5" xml:space="preserve"><style>.st1{fill:#029ddd}</style><g style="enable-background:new"><path class="st1" d="M116 82.3h-4.8v-1.5h1.4v-6.9h-1.4v-1.6h4.8v1.6h-1.4v6.9h1.4zM143.7 82.3l-3.7-7.1v7.1h-2v-10h2.7l3.4 6.8v-6.8h2v10zM172.1 74.2v2.1h3.8v1.8h-3.8v4.2h-2v-10h6.5v1.9zM204.5 77.3c0-1.2-.2-2.1-.5-2.6s-.9-.8-1.7-.8c-.8 0-1.4.3-1.7.8-.3.5-.5 1.4-.5 2.6 0 1.2.2 2.1.5 2.6s.9.8 1.7.8c.8 0 1.4-.3 1.7-.8.3-.5.5-1.4.5-2.6zm2.1 0c0 1.7-.4 3.1-1.1 3.9-.7.9-1.8 1.3-3.2 1.3-1.5 0-2.6-.5-3.3-1.4-.7-.9-1-2.2-1-3.9 0-1.7.3-3 1-3.9.7-.9 1.8-1.4 3.3-1.4 1.5 0 2.6.5 3.3 1.4.7 1.1 1 2.3 1 4zM111.2 60.2H315v1.4H111.2zM123.1 24.4V10.1h8c2.2 0 3.9.7 5.1 2.1 1.3 1.4 1.9 3.3 1.9 5.6 0 2.1-.6 3.7-1.8 4.9-1.2 1.2-3 1.7-5.3 1.7h-7.9zm0 9.3h7.6c6 0 10.8-1.5 14.2-4.5 3.5-3 5.2-6.9 5.2-11.9 0-3.3-.8-6.4-2.4-9-1.6-2.7-3.8-4.7-6.8-6.1-2.9-1.4-6.2-2.2-10-2.2h-3.1c-4.6 0-8.5 1.7-11.8 5-3.3 3.3-4.9 7.4-4.9 12.1V40c0 3 1.1 5.6 3.2 7.8s4.6 3.2 7.6 3.2h1.2V33.7zM165.1 23.1c1.8 0 3.1.5 4 1.5.9 1 1.4 2.3 1.4 4.1v.9h-11.1c.6-4.4 2.5-6.5 5.7-6.5zm1.2 28.1c2.9 0 5.6-.6 8.1-1.7s4.5-2.6 5.8-4.5l-5-5.9c-1.4 1.2-2.6 2.1-3.8 2.7s-2.6.9-4.3.9c-2.1 0-3.8-.6-5.2-1.7-1.3-1.1-2.2-2.7-2.6-4.7H177c1.2 0 2.2-.4 3-1.3.8-.8 1.2-1.8 1.2-3-.2-3.4-.6-6-1.3-7.9-.6-1.9-1.6-3.5-3-5-2.9-3.1-6.8-4.6-11.8-4.6-3.5 0-6.6.8-9.1 2.3-2.6 1.5-4.5 3.6-5.9 6.4-1.3 2.8-2 5.9-2 9.5v.9c0 5.2 1.7 9.3 5 12.6 3.5 3.4 7.8 5 13.2 5zM202.4 25.9l.2-10.5c-.9-.3-1.9-.4-3-.4-3.2 0-5.7 1.8-7.5 5.3l-.4-4.6c-2.8 0-5.1 1-7.1 3.1s-2.9 4.5-2.9 7.5v23.3c0 .6.2 1.1.6 1.6.4.4.9.7 1.5.7 2.4 0 4.4-.9 6.1-2.7 1.7-1.8 2.5-3.9 2.5-6.4V28.9c.9-2.2 3.1-3.3 6.4-3.3l3.6.3zM209 51.2c2.9 0 5.5-1.1 7.5-3.3 2.1-2.2 3.1-4.8 3.1-7.9V23.3h6.7v-7.7h-6.7v-2.7c0-2.9 1.6-4.3 4.8-4.3 1.1 0 2 .1 2.6.3V.7c-1.8-.4-3.5-.7-5-.7-4.2 0-7.4 1.1-9.7 3.3-2.3 2.2-3.5 5.4-3.5 9.4v2.8h-5v7.7h5v28zM245.4 23.1c1.8 0 3.1.5 4 1.5.9 1 1.4 2.3 1.4 4.1v.9h-11.1c.6-4.4 2.5-6.5 5.7-6.5zm1.2 28.1c2.9 0 5.6-.6 8.1-1.7s4.5-2.6 5.8-4.5l-5-5.9c-1.4 1.2-2.6 2.1-3.8 2.7s-2.6.9-4.3.9c-2.1 0-3.8-.6-5.2-1.7-1.3-1.1-2.2-2.7-2.6-4.7h17.6c1.2 0 2.2-.4 3-1.3.8-.8 1.2-1.8 1.2-3-.2-3.4-.6-6-1.3-7.9-.6-1.9-1.6-3.5-3-5-2.9-3.1-6.8-4.6-11.8-4.6-3.5 0-6.6.8-9.1 2.3-2.6 1.5-4.5 3.6-5.9 6.4-1.3 2.8-2 5.9-2 9.5v.9c0 5.2 1.7 9.3 5 12.6 3.5 3.4 7.9 5 13.3 5zM277.8 42.7c-1.8 0-3.1-.7-3.9-2.1-.8-1.4-1.2-3.8-1.2-7.3 0-2 .1-3.6.2-4.7.5-3.6 2.1-5.4 4.8-5.4 1.4 0 2.6.5 3.5 1.5.9 1 1.3 2.4 1.3 4.2h1.7c2.6 0 4.4-1.2 5.5-3.6 1.1-2.4.7-4.6-1-6.6 0 0-.1 0-.1-.1-2.6-2.5-6.1-3.8-10.6-3.8-3.3 0-6.1.7-8.5 2.2-2.4 1.4-4.2 3.5-5.5 6.3-1.3 2.7-1.9 5.8-1.9 9.4v.5c0 5.7 1.4 10.1 4.3 13.3 2.9 3.2 6.8 4.8 11.8 4.8 4.2 0 7.7-1.2 10.4-3.7s4-5.6 4-9.5h-10c0 1.5-.4 2.6-1.2 3.5-.9.7-2.1 1.1-3.6 1.1zM308.9 5.9h-2.1c-2.4 0-4.4.9-6 2.6-1.7 1.7-2.5 3.8-2.5 6.3H294v7.7h4.3v17.7c0 3.7.9 6.4 2.6 8.2 1.7 1.8 4.4 2.7 8.1 2.7 2.1 0 4.1-.3 6-.9v-8c-.7.1-1.6.2-2.7.2-1.4 0-2.3-.3-2.7-.8-.5-.5-.7-1.5-.7-2.8V22.5h5.6v-7.7h-5.6V5.9z"/><path d="M38.9 3.3C19.1 4.6 3.3 21.2 3.3 41.3c0 20.9 17 38 38 38 20.9 0 38-17 38-38 0-4-.6-7.9-1.9-11.7-2.3.9-4.6 1.7-6.7 2.3 1 3.1 1.5 6.2 1.5 9.4 0 17.1-13.9 30.9-30.9 30.9-17.1 0-30.9-13.9-30.9-30.9 0-8.1 3.1-15.8 8.8-21.6 5.3-5.4 12.3-8.7 19.7-9.2V3.3zM79 25.9c.4.2.7.5.9.9 1.7 4.7 2.6 9.5 2.6 14.5C82.5 64 64 82.5 41.3 82.5 18.5 82.5 0 64 0 41.3c0-10.9 4.2-21.2 11.9-28.9C19.5 4.6 29.7.2 40.5 0c.4 0 .9.2 1.2.5.3.3.5.7.5 1.2V12c0 .9-.7 1.6-1.6 1.6-14.9.4-27 12.8-27 27.6 0 15.2 12.4 27.7 27.7 27.7C56.5 68.9 69 56.5 69 41.2c0-3.4-.6-6.7-1.8-9.9-.2-.4-.1-.9.1-1.3s.6-.7 1-.8c2.9-.9 6.3-2 9.6-3.4.2-.1.7-.1 1.1.1z" style="opacity:.6;fill-rule:evenodd;clip-rule:evenodd;fill:#029ddd"/><path d="M41.3 20.3c-11.6 0-21 9.4-21 21s9.4 21 21 21 21-9.4 21-21c-.1-11.6-9.5-21-21-21zm0 45.2C27.9 65.5 17 54.6 17 41.3 17 27.9 27.9 17 41.3 17s24.3 10.9 24.3 24.3c-.1 13.3-11 24.2-24.3 24.2z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#029ddd"/><path class="st1" d="M94 0h1.9v82.5H94z"/></g></svg>
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
