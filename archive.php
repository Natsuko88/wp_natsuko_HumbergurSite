<?php get_header();?>
            <main class="l-main">
                <div class="l-main-article p-main--front">
                    <div class="p-tophead--archive">
                        <h2 class="c-page-title">
                            Menu:
                        </h2>
                        <!--カテゴリのデータを取得-->
                        <?php
                            $cat=get_the_category();
                            $cat=$cat[0];
                            $cat_description = $cat->category_description; 
                        ?>
                        
                        <p class="u-page-title--sub"><?php echo $cat->name; ?></p>
                    </div>
                    <article class="p-article--archive">
                        <h3 class="c-sub-title"><?php echo $cat->name; ?></h3>
                        <p class="c-sub-article">
                            <?php echo $cat_description; ?>
                        </p>
                        <section class="p-content--archive">
                        <!--メインループ検索結果出力-->
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <!-- 繰り返す部分(p-card--archive) -->
                            
                            <section class="p-card--archive">
                                <?php
                                    if(has_post_thumbnail()):
                                        the_post_thumbnail();
                                    else:
                                ?>
                                    <img class="c-article-img" src="<?php echo get_template_directory_uri();?>/img/archive-card.jpg" alt="チーズバーガーの画像">
                                <?php endif;?>
                                <article class="p-card--archive--article">
                                    <h3 class="c-content-title c-content-title--archive">
                                        <?php the_title();?>
                                    </h3>
                                    <p class="c-card-article c-card-article--archive">
                                        <?php the_content('詳しく見る');?>
                                    </p>
                                    
                                    <button class="c-button c-button--detail">
                                        詳しく見る
                                        <a href="<?php the_permalink();?>"></a>
                                    </button>
                                </article>
                            </section>                   
                        <?php endwhile;endif;wp_reset_query(); ?>
                        <!--メインループ終わり-->
                        </section>
                    </article>      
                </div> 
                <section class="p-pagenation">
                    <p class="c-pagenation-head">page 1/10</p>
                    <button class="c-button c-button--pagenation">
                        <img src="img/pagenation.png" alt="ページングボタン">
                        <p class="c-button c-button--page-text">前へ</p>
                    </button>
                    
                    <ul class="p-pagenation-list">
                        <li class="c-pagenation u-pagenation">1<li>
                        <li class="c-pagenation">2</li>
                        <li class="c-pagenation">3</li>
                        <li class="c-pagenation">4</li>
                        <li class="c-pagenation">5</li>
                        <li class="c-pagenation">6</li>
                        <li class="c-pagenation">7</li>
                        <li class="c-pagenation">8</li>
                        <li class="c-pagenation">9</li>
                    </ul>
                    
                    <button class="c-button c-button--pagenation u-button--pagenation">
                        <p class="c-button c-button--page-text">次へ</p>
                        <img src="img/pagenation.png" alt="ページングボタン">
                    </button>
                </section>
                
            </main>
        </div><!--wrapper-main-->
        <?php get_sidebar();?>
    </div><!--wrapper-wide-->

    <?php get_footer();?>