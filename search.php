<?php get_header();?>
            <main class="l-main">
                <div class="l-main-article p-main--front">
                    <div class="p-tophead--archive">
                        <h2 class="c-page-title">
                            Serch:
                        </h2>
                        <?php echo esc_html(get_search_query()); ?>
                    </div>
                    <article class="p-article--archive">
                        <h3 class="c-sub-title">小見出しが入ります</h3>
                        <p class="c-sub-article">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
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
                                    <article class="p-card--archive--article">
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
                                    </article>
                                </section>                   
                            <?php endwhile; ?>
                            <!--メインループ終わり-->
                        <?php else: ?>
                            <p>検索されたキーワードに一致する記事はありませんでした</p>
                        
                        <?php endif; ?>
                
                        </section>
                    </article>      
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