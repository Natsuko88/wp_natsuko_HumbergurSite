<?php
    //テーマサポート
    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'footer_nav' =>esc_html__('footer navigation','natsukohumbergur'),
            'category_nav' =>esc_html__('category navigation','natsukohumbergur'),
        ));
        add_theme_support('editor-styles');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'custom-header'); 
        add_theme_support( "wp-block-styles" );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "custom-logo");
        add_theme_support( "align-wide" );
        add_theme_support( "custom-background" );
        add_editor_style();
    }
    add_action('after_setup_theme','custom_theme_support');

    //タイトル出力
    function natsukohumbergur_title($title){
        if(is_front_page()&&is_home()){//トップページなら
            $title=get_bloginfo('name','display');
        }elseif(is_singular()){//シングルページなら
            $title=single_post_title('',false);
        }
            return $title;
    }
    add_filter('pre_get_document_title','natsukohumbergur_title');


    //script,style
    function natsukohumbergur_script(){
        wp_enqueue_style('ress','https://unpkg.com/ress/dist/ress.min.css',array());
        wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array());
        wp_enqueue_style('preconnect', 'https://fonts.googleapis.com',array());
        wp_enqueue_style('preconnect_origin', 'https://fonts.gstatic.com',array());
        wp_enqueue_style('m+plus1','https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',array());
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script('mainjs',get_template_directory_uri() .'/main.js', array(), '1.0.0',true);
    }
    add_action('wp_enqueue_scripts','natsukohumbergur_script');
    