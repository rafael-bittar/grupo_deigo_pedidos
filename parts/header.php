<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/img/favicon.svg' ?>" type="image/svg">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site"></div>

    <header>
        <a href="<?php echo home_url('/') ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/logo-grupo-deigo.png' ?>" class="logo" alt="Logotipo Grupo Deigo">
        </a>
    </header>