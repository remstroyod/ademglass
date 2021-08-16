<?php
/**
 * The header for our theme
 * @package adem
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 8]><html lang="en-us" class="no-js lt-ie8"> <![endif]-->
<!--[if gte IE 8]><!--><html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#01276C">
    <meta name="msapplication-navbutton-color" content="#01276C">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=get_template_directory_uri()?>/assets/css/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=get_template_directory_uri()?>/assets/css/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="<?=get_template_directory_uri()?>/assets/css/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#000">
    <!-- end favicon -->
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?=body_class()?>>
<!-- container -->
<div id="container">
    <?php
    /**
     * header_parts hook
     *
     * @hooked adem_header_TagHeaderOpen - 10
     * @hooked adem_header_TagHeaderInner - 20
     * @hooked adem_header_TagHeaderClose - 30
     *
     */
    do_action('header_parts');
    ?>
    <main>
