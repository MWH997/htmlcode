<?php

/**
 * The template for displaying all single player posts
 */

//get_header();
?>

<!doctype html>
<html lang="en-US">

<head>
    <?php
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    ?>
    <meta name="page_url" content=<?php echo $current_url; ?>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>
        var csrf = 'osp0vdwBKWw1WVgGqYljoyruAzr5YJTg2dx6O3x6'
    </script>
    <title> <?php the_title(); ?> &#8211; Panthera
    </title>
    <meta name='robots' content='noindex, nofollow' />
    <link rel="alternate" type="application/rss+xml" title="Panthera &raquo; Feed" href="https://player.pantherasports.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Panthera &raquo; Comments Feed" href="https://player.pantherasports.com/comments/feed/" />
    <?php $classic_themes_min = get_template_directory_uri().'/player/assets/css/classic-themes.min.css';?>
    <link rel='stylesheet' id='classic-theme-styles-css' href='<?php echo $classic_themes_min; ?>' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <?php $theme_min_styles_css = get_template_directory_uri().'/player/assets/css/theme.min.css'; ?>
    <link rel='stylesheet' id='theme_styles-css' href='<?php echo $theme_min_styles_css; ?>' type='text/css' media='all' />
    <link rel="https://api.w.org/" href="https://player.pantherasports.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://player.pantherasports.com/wp-json/wp/v2/player/804" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://player.pantherasports.com/cms/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://player.pantherasports.com/cms/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2.1" />
    <link rel="canonical" href='<?php echo home_url(add_query_arg(NULL, NULL)); ?>' />
    <link rel='shortlink' href='<?php wp_get_shortlink(); ?>' />
    <link rel="alternate" type="application/json+oembed" href="https://player.pantherasports.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fplayer.pantherasports.com%2Fplayer%2Fothmane-boussaid%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://player.pantherasports.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fplayer.pantherasports.com%2Fplayer%2Fothmane-boussaid%2F&#038;format=xml" />
    <script type="text/javascript">
        /* <![CDATA[ */
        var themosis = {
            //     ajaxurl: "https:\/\/player.pantherasports.com\/cms\/wp-admin\/admin-ajax.php",
        };
        /* ]]> */
    </script>
    <meta name="csrf-token" content="osp0vdwBKWw1WVgGqYljoyruAzr5YJTg2dx6O3x6">
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <?php 
    $icon_panthera_32 = get_template_directory_uri().'/player/assets/images/cropped-emblem-panthera-32x32.png';
    $icon_panthera_192 = get_template_directory_uri().'/player/assets/images/cropped-emblem-panthera-192x192.png';
    $icon_panthera_apple_touch = get_template_directory_uri().'/player/assets/images/cropped-emblem-panthera-180x180.png';
    $icon_panthera_msapplication = get_template_directory_uri().'/player/assets/images/cropped-emblem-panthera-270x270.png';
    ?>
    <link rel="icon" href="<?php echo $icon_panthera_32; ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo $icon_panthera_192 ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo $icon_panthera_apple_touch ?>" />
    <meta name="msapplication-TileImage" content="<?php echo $icon_panthera_msapplication ?>" />
</head>

<?php while (have_posts()) :
    the_post(); ?>
    <?php
    $hero = get_field("hero_enabled");
    $overview = get_field("overview_enabled");
    $key_stats = get_field("key_stats_enabled");
    $references = get_field("references_enabled");
    $bio = get_field("bio");
    $focus = get_field("focus");
    $video = get_field("video");
    $player = get_field("player");
    $stats_counter = 0;
    global $wp;
    $home_url = home_url();

    ?>

    <body class="player-template-default single single-player postid-804 logged-in">
        <div class="wrapper">
            <header class="header" role="banner">
                <div class="header-inner">
                    <div class="logo">
                        <div class="logo">
                            <a href=<?php echo $home_url ?> title="Logo">
                                <?php $logo_panthera_url = get_template_directory_uri().'/player/assets/logo.svg'; ?>
                                <img src="<?php echo $logo_panthera_url; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="open_mobile_btn">
                        <span>
                        </span>
                        <span>
                        </span>
                        <span>
                        </span>
                    </div>
                    <div class="player-menu">
                        <?php if ($overview) : ?>
                            <a href="#" data-id="overview" class="active">Overview
                            </a>
                        <?php endif; ?>
                        <?php if ($key_stats) : ?>
                            <a href="#" data-id="key_stats">Key Stats
                            </a>
                        <?php endif; ?>
                        <?php if ($references) : ?>
                            <a href="#" data-id="reference">Strengths
                            </a>
                        <?php endif; ?>
                        <a href="#" data-id="contact">Contact
                        </a>
                    </div>
                </div>
                <div class="player-menu mobile">
                    <?php if ($overview) : ?>
                        <a href="#" data-id="overview" class="active">Overview
                        </a>
                    <?php endif; ?>
                    <?php if ($key_stats) : ?>
                        <a href="#" data-id="key_stats">Key Stats
                        </a>
                    <?php endif; ?>
                    <?php if ($references) : ?>
                        <a href="#" data-id="reference">Strengths
                        </a>
                    <?php endif; ?>
                    <a href="#" data-id="contact">Contact
                    </a>
                </div>
            </header>
            <!-- player_style.php -->
            <style>
                /*** header css start ***/
                .logo img {
                    width: 50px;
                    height: 50px;
                    transition: 0.4s;
                }

                .header.scroll {
                    background: #000 !important;
                }

                .header.scroll .logo img {
                    height: 40px;
                    width: 40px;
                }

                .header.scroll .player-menu a {
                    color: #fff !important;
                }

                .header.scroll .player-menu a.active {
                    color: #F4D47F !important;
                }

                .header.scroll .logo {
                    min-height: 70px;
                }

                #hero.player_row .hero_bg::before {
                    background: rgba(0, 0, 0, .65) !important;
                }

                .play_video {
                    border: 5px solid #F4D47F !important;
                }

                /*** header css end ***/
                /*** overview css start ***/
                #overview {
                    background: #000;
                }

                .overview .row-title .small {
                    color: #fff !important;
                }

                .white-text {
                    color: #fff;
                }

                #overview .row-title h2.big {
                    position: relative;
                    display: inline-block;
                    margin-bottom: 77px;
                }

                .overview .row-title h2.big::before,
                .bio-info .row-title h2.big::before,
                #reference h2.big:before,
                .best_games h2.big:before {
                    content: "";
                    background-color: #fff;
                    position: absolute;
                    width: 93px;
                    left: 0;
                    right: 0;
                    margin: 0 auto;
                    height: 3px;
                    bottom: -37px;
                }

                .bio-info .row-title h2.big::before {
                    left: 0;
                    right: auto;
                }

                .overview .row-title .info-title {
                    color: #fff;
                }

                .overview .about_side:before,
                .overview .about_side:after {
                    content: none;
                }

                .overview .about_side .overview-icon {
                    position: absolute;
                    left: 0;
                    top: 50%;
                    -moz-transform: translateY(-50%);
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                }

                .overview .right.about_side .overview-icon {
                    left: auto;
                    right: 0;
                }

                .overview .about_side .overview-icon>img {
                    max-height: 80px;
                    width: 60px;
                }

                .overview .about_side .field.title {
                    color: #F4D47F;
                    font-weight: 400;
                }

                .overview .about_side .field.text {
                    font-size: 28px;
                    color: #fff;
                }

                .overview .left.about_side {
                    padding-left: 80px;
                }

                .overview .right.about_side {
                    padding-right: 80px;
                }

                .overview .about_side {
                    margin-bottom: 85px;
                }

                #overview .row-title .info-title {
                    font-size: 19px;
                }

                /*** bio section css start ***/
                #bio-section.bio-content {
                    background: #000;
                    position: relative;
                }

                .bio-content .row {
                    width: 100%;
                }

                .bio-img>img {
                    width: 100%;
                }

                #bio-section .bio-info {
                    margin-top: 10px;
                }

                .bio-info .row-title .text_orange,
                .best_games .row-title .text_orange {
                    color: #be863c;
                }

                .bio-info .row-title h2.big {
                    position: relative;
                    margin-bottom: 90px;
                }

                .bio-info p {
                    font-size: 16px;
                    color: #fff;
                    font-family: Times New Roman;
                }

                .bio-info p:last-child {
                    margin-bottom: 0;
                }

                .bio-info-inner {
                    padding: 0 110px 0 85px;
                }

                #bio-section.bio-content::before {
                    position: absolute;
                    right: 0;
                    height: 10px;
                    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f3d37e+0,bb7f3d+100 */
                    background: #f3d37e;
                    /* Old browsers */
                    background: -moz-linear-gradient(left, #f3d37e 0%, #bb7f3d 100%);
                    /* FF3.6-15 */
                    background: -webkit-linear-gradient(left, #f3d37e 0%, #bb7f3d 100%);
                    /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to right, #f3d37e 0%, #bb7f3d 100%);
                    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3d37e', endColorstr='#bb7f3d', GradientType=1);
                    /* IE6-9 */
                    content: "";
                    width: 100%;
                    left: 0;
                    top: 0;
                }

                /*** bio section css end ***/
                /*** year section css start ***/
                #year-main {
                    background: #2D2D2D;
                    /* padding: 0; */
                    padding: 100px 0;
                }

                #year-main .years .row-title .big {
                    margin-bottom: -4px;
                    position: relative;
                }

                #year-main .row-title {
                    margin-bottom: 120px;
                }

                .percent {
                    font-size: 32px;
                    color: #fff;
                }

                #svg circle {
                    stroke: #F4D47F;
                }

                .field_item.year_numbers,
                .field_item.year_title {
                    font-size: 22px;
                    color: #fff;
                }

                .field.year_field:nth-child(odd):before {
                    background: #4E4E4E;
                }

                .field_item.year_numbers {
                    font-size: 25px;
                }

                .numbers_line {
                    background: #F4D47F;
                }

                .field_item.year_title>img {
                    max-width: 61px;
                    margin-bottom: 5px;
                }

                /*** year section css end ***/
                /*** keystats section css start ***/
                .player_row.key_stats {
                    padding-top: 100px;
                    margin-top: 0px;
                }

                .attribute-card {
                    background-image: url(./player/assets/rectangle-border.svg);
                    background-size: 100% 100%;
                    padding: 1.5rem 1.4rem .2rem;
                    color: #fff;
                    text-align: left;
                    margin-bottom: 35px;
                    max-width: 200px;
                    min-width: 200px;
                    width: 100%;
                }

                .attribute-card .icon {
                    height: 3rem;
                    max-width: 70px;
                }

                .attribute-card .name {
                    font-size: 17px;
                    margin-top: .5rem;
                    font-weight: 400;
                    font-family: Montserrat;
                    margin-bottom: 0;
                }

                .attribute-card .value {
                    font-size: 34px;
                    font-weight: 700;
                    font-family: Montserrat;
                    margin-bottom: 5px;
                }

                h4.league_avg {
                    font-size: 12px;
                    color: #98989A;
                }

                .league-rank {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 5px;
                    padding: 0;
                }

                .league-avg {
                    cursor: pointer;
                    color: #98989a;
                    padding: 0;
                    max-width: 220px;
                }

                .ranks {
                    cursor: pointer;
                    color: #F4D47F;
                }

                .ranks .rank {
                    font-size: 12px;
                }

                .player_row.key_stats .player_inner_row {
                    padding-top: 0;
                    padding-bottom: 150px;
                }

                /* #key_stats .hero_bg {
        background-position:0 -33px;
        } */
                #key_stats .col-md-4:nth-child(2) .attribute-card,
                #key_stats .col-md-4:nth-child(5) .attribute-card,
                #key_stats .col-md-4:nth-child(8) .attribute-card,
                #key_stats .col-md-4:nth-child(11) .attribute-card {
                    margin: 0 auto;
                }

                #key_stats .col-md-4:nth-child(3n+0) .attribute-card {
                    float: right;
                }

                /*** keystats section css end ***/
                /*** reference css start ***/
                #reference {
                    background: #E0B768;
                    border-bottom: 10px solid #E0B768;
                }

                #reference h2.big {
                    position: relative;
                }

                #reference.player_row.reference .field {
                    font-size: 22px;
                    color: #000;
                }

                #reference .about_side:before {
                    background: #000;
                    box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.9);
                }

                #reference .right.about_side {
                    padding-right: 83px;
                }

                #focus-section {
                    background: #2D2D2D;
                }

                /*** reference css end ***/
                /*** best games css start ***/
                #best-games {
                    padding: 100px 0;
                }

                .best_games h2.big {
                    position: relative;
                }

                .team,
                .vs {
                    font-size: 19px;
                    font-family: Montserrat;
                    color: #fff;
                    font-weight: 400;
                }

                .vs_text {
                    font-size: 19px;
                    font-family: Montserrat;
                    color: #fff;
                    border: 2px solid #F4D47F;
                    border-radius: 100%;
                    height: 43px;
                    width: 43px;
                    line-height: 38px;
                    font-weight: 700;
                }

                .bg_logo {
                    background: transparent;
                    border-radius: 0;
                    background-color: transparent;
                    width: 75px;
                    height: 75px;
                }

                .best_games .col-6.col-md-6.team {
                    padding-right: 40px;
                }

                .best_games .col-6.col-md-6.vs {
                    padding-left: 40px;
                }

                /* #best-games .hero_bg{
        background-position: 0 -82px;
        } */
                .position_relative {
                    margin-bottom: 55px;
                }

                span.bg_logo>img {
                    max-width: 75px;
                    max-height: 75px;
                }

                /*** best games css end ***/
                /*** footer css start ***/
                .footer {
                    margin: 0 0 1px 0;
                    text-align: left;
                    background: #000;
                    border-top: 1px solid #fff;
                }

                .footer p {
                    font-size: 16px;
                    font-family: Montserrat;
                    text-align: left;
                }

                .footer .player_row {
                    text-align: left;
                }

                #contact a {
                    font-size: 16px;
                    color: #fff;
                    font-family: Montserrat;
                    font-weight: 400;
                    transition: 0.4s;
                }

                .privacy_conditions {
                    transition: 0.4s;
                    line-height: 4;
                    font-size: 13px;
                    color: #D4D1C1;
                }

                #contact a:hover,
                #contact a:focus,
                .privacy_conditions:hover,
                .privacy_conditions:focus {
                    color: #E0B768;
                }

                .follow-us ul {
                    margin: 0;
                    padding: 0;
                }

                .follow-us li {
                    display: inline;
                    margin-left: 20px;
                }

                .follow-us li:first-child {
                    margin-left: 0px;
                }

                .follow-us li a img {
                    max-width: 32px;
                }

                .footer_logo a>img {
                    max-width: 171px;
                }

                .footer_logo {
                    margin-top: -25px;
                }

                .sub_footer {
                    padding: 0 85px;
                }

                .reserved {
                    font-size: 13px;
                    font-family: Montserrat;
                    color: #D4D1C1;
                    font-weight: 300;
                    line-height: 4;
                }

                .best_games .big {
                    margin-bottom: 123px;
                }

                .reserved p {
                    margin-bottom: 0;
                }

                /*** responsive css start ***/
                @media screen and (min-width:1441px) {
                    .attribute-card {
                        max-width: 300px;
                        min-width: 300px
                    }
                }

                @media screen and (max-width:1300px) {
                    .bio-info-inner {
                        padding: 0 40px;
                    }

                    .footer_title {
                        font-size: 20px;
                    }

                    .overview .about_side .field.text {
                        font-size: 24px;
                    }

                    #reference.player_row.reference .field {
                        font-size: 20px;
                    }
                }

                @media screen and (max-width:1200px) {
                    .bio-info-inner {
                        padding: 0;
                    }

                    .bio-info .row-title h2.big {
                        margin-bottom: 55px;
                    }
                }

                @media screen and (max-width:1099px) {
                    .bio-info p {
                        margin-bottom: 7px;
                    }

                    .bio-info {
                        padding-right: 0;
                    }

                    #best-games .hero_bg {
                        top: 0;
                    }

                    .footer_title {
                        font-size: 18px;
                    }

                    .sub_footer {
                        padding: 0 15px;
                    }
                }

                @media screen and (max-width:1023px) {
                    .bio-content .row {
                        width: 100%;
                        margin: 0;
                    }

                    .bio-img {
                        flex: 0 0 100%;
                        max-width: 100%;
                        padding: 0;
                        margin-top: 9px;
                    }

                    .bio-info {
                        flex: 0 0 100%;
                        max-width: 100%;
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }

                    .footer_title {
                        font-size: 19px;
                    }

                    .bio-img {
                        margin-top: 0;
                    }

                    .bio-info {
                        padding-right: 15px;
                    }

                    #bio-section .bio-info {
                        position: relative;
                        margin-top: 0;
                    }

                    #bio-section .bio-info:before {
                        position: absolute;
                        right: 0;
                        height: 10px;
                        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f3d37e+0,bb7f3d+100 */
                        background: #f3d37e;
                        /* Old browsers */
                        background: -moz-linear-gradient(left, #f3d37e 0%, #bb7f3d 100%);
                        /* FF3.6-15 */
                        background: -webkit-linear-gradient(left, #f3d37e 0%, #bb7f3d 100%);
                        /* Chrome10-25,Safari5.1-6 */
                        background: linear-gradient(to right, #f3d37e 0%, #bb7f3d 100%);
                        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3d37e', endColorstr='#bb7f3d', GradientType=1);
                        /* IE6-9 */
                        content: "";
                        width: 100%;
                        left: 0;
                        top: 0;
                    }

                    .percent {
                        font-size: 25px;
                    }
                }

                @media screen and (max-width:991px) {

                    .footer-logo,
                    .follow-us {
                        margin-bottom: 30px;
                    }

                    .footer_logo a>img {
                        max-width: 150px;
                    }

                    .footer_title {
                        margin-bottom: 20px;
                    }
                }

                @media screen and (max-width:767px) {
                    .overview .about_side .overview-icon>img {
                        max-height: 55px;
                        width: 55px;
                    }

                    .overview .right.about_side .overview-icon {
                        left: 0;
                        right: auto;
                    }

                    .overview .right.about_side {
                        padding-right: 0;
                        padding-left: 80px;
                    }

                    .overview .about_side {
                        margin-bottom: 40px;
                    }

                    .attribute-card {
                        max-width: 100%;
                        min-width: 100%;
                    }

                    .logo {
                        margin-left: 15px;
                        min-height: 51px;
                    }

                    .header.scroll .logo {
                        min-height: 38px;
                    }

                    .header.scroll .logo img {
                        height: 36px;
                        width: 36px;
                    }

                    .logo img {
                        width: 45px;
                        height: 45px;
                    }

                    .footer,
                    .footer p,
                    .footer .player_row {
                        text-align: center;
                    }

                    .reserved,
                    .privacy_conditions {
                        line-height: 1.5;
                    }

                    .sub_footer {
                        padding: 15px 15px 15px;
                    }

                    .footer_logo {
                        text-align: center;
                    }

                    .footer-logo,
                    .follow-us,
                    .office-hours,
                    .footer-contact {
                        margin-bottom: 20px;
                    }

                    .footer_logo {
                        margin-top: 0;
                    }

                    .player-menu.mobile {
                        background: #000;
                    }

                    .header .player-menu a.active {
                        color: #F4D47F !important;
                    }

                    .header .player-menu a {
                        color: #fff !important;
                    }

                    .footer {
                        padding: 45px 15px 25px 15px !important;
                    }

                    #year-main {
                        padding: 80px 0;
                    }

                    .field_item.year_title>img {
                        max-width: 55px;
                        margin: 10px auto 10px;
                        display: block;
                    }

                    #best-games {
                        padding-bottom: 80px;
                    }

                    .overview .row-title h2.big::before,
                    .bio-info .row-title h2.big::before,
                    #reference h2.big:before,
                    .best_games h2.big:before {
                        bottom: -25px;
                    }
                }

                @media screen and (max-width:575px) {

                    #key_stats .col-md-4:nth-child(2) .attribute-card,
                    #key_stats .col-md-4:nth-child(5) .attribute-card,
                    #key_stats .col-md-4:nth-child(8) .attribute-card,
                    #key_stats .col-md-4:nth-child(11) .attribute-card {
                        margin: 0 0 35px 0;
                    }

                    span.bg_logo>img {
                        max-width: 65px;
                        max-height: 55px;
                    }

                    .bg_logo {
                        height: 55px;
                    }
                }

                @media screen and (max-width:479px) {

                    .team,
                    .vs {
                        font-size: 13px;
                    }

                    .vs_text {
                        font-size: 16px;
                    }

                    .vs_text {
                        font-size: 14px;
                        height: 28px;
                        width: 28px;
                        line-height: 24px;
                    }

                    .best_games .col-6.col-md-6.vs {
                        padding-left: 20px;
                        padding-right: 0;
                    }

                    .best_games .col-6.col-md-6.team {
                        padding-right: 20px;
                        padding-left: 0;
                    }

                    .row-title .big {
                        font-size: 48px;
                    }

                    #reference.player_row.reference .field {
                        font-size: 19px;
                    }

                    #best-games-player-inner-row-div {
                        padding: 10%;
                    }
                }

                /*** responsive css end ***/
            </style>
            <div class="player_page">
                <?php if ($hero) : ?>
                    <?php if ($video != "") : ?>
                        <div class="play_video_modal modal fade show" id="play_video" data-backdrop="true" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×
                                            </span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe title="Loris Benito" src=<?php echo get_field(
                                                                                "video"
                                                                            ); ?> width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div id="hero" class="player_row hero row">
                                <div class="hero_bg" style="background-image: url(<?php echo $player["background"] . "?width=1920&amp;crop=0"; ?>);">
                                </div>
                                <div class="player_inner_row">
                                    <div class="row-title">
                                        <h4 class="small">
                                            Watch the video highlights
                                        </h4>
                                        <h2 class="big">
                                            <span class="text_orange"><?php echo $player["first_name"]; ?>
                                            </span>
                                            <span><?php echo $player["last_name"]; ?>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="play_video" data-target="#play_video" data-toggle="modal">
                                        <div class="triangle">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php else : ?>

                            <div class="play_video_modal modal fade show" id="play_video" data-backdrop="true" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×
                                                </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe title="Loris Benito" src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div id="hero" class="player_row hero row">
                                    <div class="hero_bg" style="background-image: url(<?php echo $player["background"] . "?width=1920&amp;crop=0"; ?>);">
                                    </div>
                                    <div class="player_inner_row">
                                        <div class="row-title">
                                            <h4 class="small">
                                            </h4>
                                            <h2 class="big">
                                                <span class="text_orange"><?php echo $player["first_name"]; ?>
                                                </span>
                                                <span><?php echo $player["last_name"]; ?>
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>
                        <?php endif; ?>
                            </div>
                            <?php if ($overview) : ?>
                                <div id="overview" class="player_row overview row align-items-center">
                                    <div class="player_inner_row">
                                        <div class="col-sm-12 col_overview col_middle col-md-12 col-lg-10 col-xl-10 col-player">
                                            <div class="row-title">
                                                <h4 class="small"><?php echo get_field(
                                                                        "overview_title"
                                                                    ); ?>
                                                </h4>
                                                <h2 class="big white-text">
                                                    <?php echo get_field(
                                                        "overview_subtitle"
                                                    ); ?>
                                                </h2>
                                                <div class="info-title">
                                                    <p>
                                                        <?php echo get_field(
                                                            "overview_content"
                                                        ); ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <?php if (have_rows("stats")) :
                                                $stats = get_field("stats"); // Get all stats
                                                $half = round(
                                                    count($stats) / 2
                                                ); // Calculate the middle point
                                                $is_second_col = false; // Initialize column flag
                                                $stats_counter = 0; // Initialize stats counter

                                                echo '<div class="about_player col_middle col-12 col-xl-10 row" style="padding:5%;"><div class="middle-line"></div>'; // Open row div and middle line div

                                                while (have_rows("stats")) :

                                                    the_row();
                                                    $name = get_sub_field(
                                                        "name"
                                                    );
                                                    $value = get_sub_field(
                                                        "value"
                                                    );
                                                    $stats_icon = get_sub_field(
                                                        "stats_icon"
                                                    ); // Getting the image URL as a variable

                                                    // If we've reached the middle point, close first column div and open second column div
                                                    if (
                                                        $stats_counter ==
                                                        $half &&
                                                        !$is_second_col
                                                    ) {
                                                        echo '</div><div class="col-12 col-md-6">';
                                                        $is_second_col = true;
                                                    }

                                                    // If it's the first stat, open the first column div
                                                    if ($stats_counter == 0) {
                                                        echo '<div class="col-12 col-md-6">';
                                                    }

                                                    // Determine stats side
                                                    $stats_side = $is_second_col
                                                        ? "right"
                                                        : "left";
                                            ?>

                                                    <div class="col-12 <?php echo $stats_side; ?> about_side is_animated">
                                                        <div class="overview-icon">
                                                            <?php if (
                                                                $stats_icon
                                                            ) : // If image exists
                                                            ?>
                                                                <img src="<?php echo esc_url(
                                                                                $stats_icon
                                                                            ); ?>" alt="<?php echo esc_attr(
                                                                                $name
                                                                            ); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="field title"><?php echo $name; ?></div>
                                                        <div class="field text"><?php echo $value; ?></div>
                                                    </div>

                                            <?php $stats_counter++; // Increase counter
                                                endwhile;

                                                echo "</div>"; // Close last column div
                                                echo '<div class="col-12 col-md-6"></div>'; // Add extra column div
                                                echo "</div>"; // Close row div
                                            endif; ?>


                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>
                            <?php if (get_field("bio")) : ?>
                                <div id="bio-section" class="bio-content d-flex align-items-center row">
                                    <span><br> <br></span>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-6 bio-img left">
                                            <?php $bio_image = get_field(
                                                "bio_image"
                                            ); ?>
                                            <?php if ($bio_image) : ?>
                                                <img src="<?php echo esc_url(
                                                                $bio_image
                                                            ); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6 col-6 bio-info">
                                            <div class="bio-info-inner" style="padding:10%;">
                                                <div class="row-title">
                                                    <h4 class="small text_orange"><br><?php the_field(
                                                                                            "bio_title"
                                                                                        ); ?></h4>
                                                    <h2 class="big white-text"><?php the_field(
                                                                                    "bio_subtitle"
                                                                                ); ?></h2>
                                                    <p><?php echo get_field(
                                                            "bio_description"
                                                        ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span><br> <br> <br></span>
                                </div>
                            <?php endif; ?>

                            <?php
                            $season_title = get_field("season_title");
                            $year = get_field("year");

                            if (have_rows("achievements")) : ?>
                                <div id="year-main" class="player_row overview row align-items-center">
                                    <div class="player_inner_row">
                                        <div class="col-sm-12 col_overview col_middle col-md-12 col-lg-10 col-xl-10 col-player">
                                            <div class="years col_middle col-12 col-lg-10 row progress_on">
                                                <div class="col-12">
                                                    <div class="row-title">
                                                        <h4 class="small white-text"><?php echo $season_title; ?></h4>
                                                        <h2 class="big year text_orange"><?php echo $year; ?></h2>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <?php while (
                                                        have_rows(
                                                            "achievements"
                                                        )
                                                    ) :

                                                        the_row();
                                                        $data_number = get_sub_field(
                                                            "data_number"
                                                        );
                                                        $value_top = get_sub_field(
                                                            "value_top"
                                                        );
                                                        $value_bottom = get_sub_field(
                                                            "value_bottom"
                                                        );
                                                        $name = get_sub_field(
                                                            "name"
                                                        );
                                                        $achievement_image = get_sub_field(
                                                            "achievement_image"
                                                        );
                                                    ?>
                                                        <div class="field year_field">
                                                            <div class="out_year_percent">
                                                                <div class="skill-point field_item year_percent" data-number="<?php echo $data_number; ?>">
                                                                    <svg id="svg">
                                                                        <circle class="circle-progress" r="62" cx="63" cy="63" transform="rotate(-90, 63, 63)">
                                                                        </circle>
                                                                    </svg>
                                                                    <div class="skill_percent percent">
                                                                        <span class="count">0</span>%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field_item year_title">
                                                                <img src="<?php echo $achievement_image; ?>" alt="League">
                                                                <?php echo $name; ?>
                                                            </div>
                                                            <div class="field_item year_numbers">
                                                                <span class="up"><?php echo $value_top; ?></span>
                                                                <span class="numbers_line"></span>
                                                                <span class="down"><?php echo $value_bottom; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    endwhile; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;
                            ?>

                            <?php // check if the key_stats are enabled
                            if (get_field("key_stats_enabled")) :
                                // get key stats background image
                                $key_stats_background = get_field(
                                    "key_stats_background"
                                );

                                echo '<div id="key_stats" class="player_row key_stats row" style="padding:1%;">
            <div class="hero_bg" style="background-image: url(' .
                                    $key_stats_background .
                                    ');">
            </div>
            <div class="player_inner_row" style="padding:10%;">
              <div class="row-title">
                <h4 class="small">Summary</h4>
                <h2 class="big">
                  <span class="text_orange">Key</span>
                  <span>Stats</span>
                </h2>
              </div>
              <div class="row">';

                                // check if the key_stats repeater field has rows of data
                                if (have_rows("key_stats")) :
                                    // loop through the rows of data
                                    while (have_rows("key_stats")) :
                                        the_row();

                                        // display a sub field value
                                        $name = get_sub_field("name");
                                        $value = get_sub_field("value");
                                        $key_stats_image = get_sub_field(
                                            "key_stats_image"
                                        );
                                        $league_avg = get_sub_field(
                                            "league_avg"
                                        );
                                        if (empty($league_avg)) {
                                            $league_avg = "";
                                        } else {
                                            $league_avg = "League Avg: " . $league_avg;
                                        }
                                        $rank = get_sub_field("rank");
                                        if (empty($rank)) {
                                            $rank = "";
                                        } else {
                                            $rank = "Rank: " . $rank;
                                        }

                                        $key_stats_background_image =
                                            get_template_directory_uri()."/player/assets/rectangle-border.svg";

                                        echo '<div class="col-md-4 col-sm-6">
                  <div class="attribute-card" style="background-image: url(' .
                                            $key_stats_background_image .
                                            '); background-size: 100% 100%;">
                    <img class="icon" src="' .
                                            $key_stats_image .
                                            '" alt="Goals">
                    <p class="name">' .
                                            $name .
                                            '</p>
                    <h4 class="value">' .
                                            $value .
                                            '</h4>
                    <div class="league-rank col-md-12">
                      <div class="league-avg">
                        <h4 class="league_avg">' .
                                            $league_avg .
                                            '</h4>
                      </div>
                      
                      <div class="ranks">
                        <h4 class="rank">' .
                                            $rank .
                                            '</h4>
                      </div>
                    
                    </div>
                  </div>
                </div>';
                                    endwhile;
                                else :


                                // no rows found
                                endif;

                                echo "</div></div></div>";
                            endif; ?>

                            <?php
                            $references_enabled = get_field(
                                "references_enabled"
                            );

                            if ($references_enabled) : ?>
                                <div id="reference" class="player_row reference row align-items-center">
                                    <div class="player_inner_row">
                                        <div class="col-12 col-md-12 col-lg-10 col-xl-10 col-player col_middle">
                                            <div class="row-title">
                                                <?php echo '<h4 class="small">' .
                                                    get_field(
                                                        "references_subtitle"
                                                    ) .
                                                    "</h4>"; ?>
                                                <?php echo '<h2 class="big white-text">' .
                                                    get_field(
                                                        "references_title"
                                                    ) .
                                                    "</h2>"; ?>
                                            </div>
                                        </div>
                                        <div class="about_player col-12 col-xl-10 col_middle row" style="padding:10%;">
                                            <div class="middle-line"></div>
                                            <?php if (have_rows("references")) :
                                                // Track the count of the reference fields
                                                $count = 1;
                                                while (have_rows("references")) :

                                                    the_row();
                                                    $value = get_sub_field(
                                                        "value"
                                                    );
                                                    // Switch between left and right columns based on the count
                                                    $alignment =
                                                        $count % 2 != 0
                                                        ? "left"
                                                        : "right";
                                            ?>
                                                    <div class="col-12 col-md-6">
                                                        <div class="col-12 <?php echo $alignment; ?> about_side is_animated">
                                                            <div class="field <?php echo $count; ?>">
                                                                <?php echo $value; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php $count++;
                                                endwhile;
                                            endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;
                            ?>


                        </div>

                        <?php
                        $focus_enabled = get_field("focus");

                        if ($focus_enabled) {

                            $focus_title = get_field("focus_title");
                            $focus_image = get_field("focus_image");
                            $focus_subtitle = get_field("focus_subtitle");
                            $focus_description = get_field("focus_description");
                        ?>
                            <div id="focus-section" class="bio-content d-flex align-items-center row">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-6 bio-img left">
                                        <img src="<?php echo esc_url(
                                                        $focus_image
                                                    ); ?>" alt="">
                                    </div>
                                    <div class="col-md-6 col-6 bio-info">
                                        <div class="bio-info-inner">
                                            <div class="row-title" style="padding:5%;">
                                                <?php echo '<h4 class="small text_orange">' .
                                                    $focus_title .
                                                    "</h4>"; ?>
                                                <?php echo '<h2 class="big white-text">' .
                                                    $focus_subtitle .
                                                    "</h2>"; ?>
                                                <?php echo "<p>" .
                                                    $focus_description .
                                                    "</p>"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }

                        // end of if focus_enabled
                        ?>
                        <?php // Check if the best games section should be displayed
                        if (get_field("best_games")) : ?>

                            <div id="best-games" class="player_row reference row">
                                <div class="hero_bg" style="background-image: url('<?php the_field(
                                                                                        "best_games_bg_image"
                                                                                    ); ?>');">
                                </div>
                                <div id="best-games-player-inner-row-div" class="player_inner_row">
                                    <div class="col-12 col-md-12 col-lg-10 col-xl-10 col-player col_middle">
                                        <div class="row-fields best_games">
                                            <div class="row-title">
                                                <?php echo '<h4 class="small text_orange">' .
                                                    get_field(
                                                        "best_games_subtitle"
                                                    ) .
                                                    "</h4>"; ?>
                                                <?php echo '<h2 class="big white-text">' .
                                                    get_field(
                                                        "best_games_tite"
                                                    ) .
                                                    "</h2>"; ?>
                                            </div>

                                            <?php while (
                                                has_sub_field("best_games")
                                            ) : ?>
                                                <div class="position_relative">
                                                    <div class="col-6 col-md-6 team">
                                                        <?php echo get_sub_field(
                                                            "first_team_name"
                                                        ); ?>
                                                        <span class="bg_logo">
                                                            <img src="<?php the_sub_field(
                                                                            "first_team_image"
                                                                        ); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="vs_text">vs</div>
                                                    <div class="col-6 col-md-6 vs">
                                                        <span class="bg_logo">
                                                            <img src="<?php the_sub_field(
                                                                            "second_team_image"
                                                                        ); ?>" alt="">
                                                        </span>
                                                        <?php echo get_sub_field(
                                                            "second_team_name"
                                                        ); ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>



                        <!-- player_footer.php -->

                        <footer class="footer row" role="contentinfo">
                            <div class="col-12 col-xl-10 col-player col_middle row">
                                <div class="col-12 col-lg-3 col-md-6 footer-logo">
                                    <div class="footer_logo">
                                        <a href="#" title="">
                                            <?php $footer_logo_img = get_template_directory_uri().'/player/assets/footer-logo.svg'; ?>
                                            <img src="<?php echo $footer_logo_img; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6 follow-us">
                                    <div class="footer_title">Follow Panthera:
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="https://www.instagram.com/accounts/login/" title="Instagram" target="_blank">
                                                <?php $instagram_img = get_template_directory_uri().'/player/assets/instagram.svg'; ?>
                                                <img src="<?php echo $instagram_img; ?>" alt="instagram">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank">
                                                <?php $twitter_img = get_template_directory_uri().'/player/assets/twitter.svg';?>
                                                <img src="<?php echo $twitter_img; ?>" alt="twitter">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6 office-hours">
                                    <div class="footer_title">Office Hours:
                                    </div>
                                    <p>Mon – Fri: 8:00 to 18:00
                                        <br />
                                        Sat: 11:00 to 14:00
                                    </p>
                                </div>
                                <div id="contact" class="col-12 col-lg-3 col-md-6 player_row footer-contact">
                                    <div class="footer_title">Contact:
                                    </div>
                                    <a href="mailto:michael@pantherasports.com">michael@pantherasports.com
                                    </a>
                                    <br />
                                    <a href="tel:+44 7501 111 102">+44 7501 111 102
                                    </a>
                                </div>
                            </div>
                        </footer>
                        <div class="modal fade" id="privacy_conditions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Privacy &amp; Conditions
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×
                                            </span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>© <?php echo date('Y'); ?> Panthera Sports Media Group. All Rights Reserved.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 sub_footer">
                            <div class="col-player col_middle col-xl-10">
                                <div class="reserved">
                                    <p>© <?php echo date('Y'); ?> Panthera Sports Media Group. All Rights Reserved.
                                    </p>
                                </div>
                                <div class="privacy_conditions" data-target="#privacy_conditions" data-toggle="modal">
                                    Privacy &amp; Conditions
                                </div>
                            </div>
                        </div>
                        <?php $js_themes_min = get_template_directory_uri().'/player/assets/js/theme.min.js';?>
                        <script type='text/javascript' src='<?php echo $js_themes_min;?>' id='theme_js-js'>
                        </script>
    </body>
<?php
endwhile;
// end of the loop.
?>