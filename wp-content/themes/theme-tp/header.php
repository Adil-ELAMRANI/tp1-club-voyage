<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <link rel="stylesheet" href="style.css">
    <!-- <?php bloginfo('stylesheet_url'); ?> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <figure class="logo">
                <!-- <img src="assets/logo/logo.png" alt="Logo"> -->
                <img src="<?php echo get_template_directory_uri() . '/assets/logo/logo.png' ?>">
            </figure>
            <div class="navigation menu">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu' => 'principal', 'container' => 'nav', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?>
                <form class="search">
                    <input type="text" placeholder="Search" class="search__input">
                    <img class="search__img" src="/images/general/blank1.gif" width="16"
                        height="16">
                </form>
            </div>
            <form class="search-bar">
                <input type="text" placeholder="Rechercher...">
                <button type="submit">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" alt="Search" width="15"
                        height="15">
                </button>
            </form>
        </div>
    </header>