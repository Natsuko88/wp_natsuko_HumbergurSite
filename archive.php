<?php get_header();?>
    <main class="l-main">
        <div class="l-main-article p-main--front">        
            <div class="p-tophead--archive">
                <h2 class="c-page-title">
                    Menu:
                </h2>
                <p class="u-page-title--sub"><?php single_term_title(); ?></p>
            </div><!--tophead-->
            <div class="p-article--archive">
                <h3 class="c-sub-title"><?php single_term_title(); ?></h3>
                <p class="c-sub-article">
                    <?php echo esc_html(category_description()); ?>
                </p>
                <section class="p-content--archive">
                <!--メインループ検索結果出力-->
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <!-- 繰り返す部分(p-card--archive) --> 
                    <section class="p-card--archive">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img class="c-article-img" src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/archive-card.jpg">
                        <?php endif; ?>
                        <div class="p-card--archive--article">
                            <h3 class="c-content-title c-content-title--archive">
                                <?php the_title();?>
                            </h3>
                            <p class="c-card-article c-card-article--archive">
                                <?php the_excerpt();?>
                            </p>
                            <button class="c-button c-button--detail">
                                <a href="<?php the_permalink();?>">
                                    <?php _e('詳しく見る','natsukohumbergur') ?>
                                </a>
                            </button>
                        </div>
                    </section>                   
                <?php endwhile; ?>
                <!--投稿データがない場合-->
                <?php else: ?>
                <p>表示する記事がありません</p>
                <?php endif; ?>
                <!--メインループ終わり-->
                </section>
            </div>      
        </div> 
        <section class="p-pagenation">
            <!--ページネーション-->
            <?php wp_pagenavi(); ?>
        </section>  
    </main>
</div><!--wrapper-main-->
<?php get_sidebar();?>
</div><!--wrapper-wide-->
<?php get_footer();?>