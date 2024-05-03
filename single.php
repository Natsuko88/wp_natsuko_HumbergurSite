<?php get_header();?>
    <main class="l-main">
        <div class="l-main-article p-main--front">
            <div class="p-tophead--single">
                <h1 class="c-page-title">
                    <?php the_title(); ?>
                </h1>   
            </div>
            <article id="post-<?php the_ID(); ?>" <?php post_class('p-article--single'); ?> >
                <figure class="u-tophead-img--single">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </article>      
        </div>
    </main>
</div><!--wrapper-main-->
<?php get_sidebar();?>
</div><!--wrapper-wide-->
<?php get_footer();?>