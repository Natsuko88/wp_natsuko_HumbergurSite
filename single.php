<?php get_header();?>
            <main class="l-main">
                <div class="l-main-article p-main--front">
                    <div class="p-tophead--single">
                        <h1 class="c-page-title">
                            <?php the_title(); ?>
                        </h1>
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <article class="p-article--single">
                        <?php the_content(); ?>
                    </article>      
                </div> 
                
            </main>
        </div><!--wrapper-main-->
        <?php get_sidebar();?>
    </div><!--wrapper-wide-->

    <?php get_footer();?>