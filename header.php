<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-container">
        <h1 class="site-title"><a href="<?php echo home_url(); ?>" style="color: inherit; text-decoration: none;">Welcome to <?php bloginfo('name'); ?></a></h1>
        <nav class="main-navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </div>
</header>
<style>
    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #f8f9fa;
    }
    .site-title {
        font-size: 2em;
        color: #333;
    }
    .main-navigation a {
        color: #007bff;
        text-decoration: none;
        margin: 0 10px;
    }
    .main-navigation a:hover {
        text-decoration: underline;
    }
</style>