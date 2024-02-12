<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <base href="<?= bloginfo('wpurl'); ?>/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/assets/css/bootstrap.min.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/assets/css/remixicon.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/assets/css/swiper-bundle.min.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/assets/css/style.css?v=<?php echo time() ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header" id="header">
        <div class="header-top sticky-top">
            <div class="container-xl">
                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    <?php get_template_part('template-parts/header/header-logo'); ?>
                    <?php get_template_part('template-parts/header/header-brand'); ?>
                    <?php get_template_part('template-parts/header/header-slogan'); ?>
                    <?php get_template_part('template-parts/header/header-cart'); ?>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/header/header-menu'); ?>

        <?php get_template_part('template-parts/header/header-banner'); ?>
    </header>