<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RaiseTechの最終課題です">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="c-wrapper-wide">
        <div class="c-wrapper-main">
            <header class="l-header p-header">
                <button class="c-button c-button--menu">
                    Menu
                </button>
                <h1 class="p-logo">
                    <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?> </a>
                </h1>
                <?php get_search_form();?>
                <div class="p-black-layer"></div><!--スライドメニュー出現後のレイヤー-->
            </header>