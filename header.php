<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RaiseTechの最終課題です">
    <?php wp_head();?>
</head>
<body<?php body_class(); ?>>
    <div class="c-wrapper-wide">
        <div class="c-wrapper-main">
            <header class="l-header p-header">
                <button class="c-button c-button--menu">
                    Menu
                </button>
                <h1 class="p-logo">
                    <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?> 
                </h1>
                <p class="c-header--description"><?php bloginfo( 'description' ); ?></p>
                <?php get_search_form();?>
            </header>