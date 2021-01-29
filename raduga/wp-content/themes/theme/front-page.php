<?php get_header();?>

<div id="preloader">
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
</div>

<main class="main">
    <div class="main__container">
        <!-------------------------------SLIDER-------------------------------->
        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__items">
                    <div class="slider__item">
                        <div style="height: 495px; background-image: url(https://www.dtraduga.by/images/slider/CardHalva.jpg);"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 495px; background-image: url(https://www.dtraduga.by/images/slider/FUN.jpg);"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 495px; background-image: url(https://www.dtraduga.by/images/slider/kartabelgazprom.jpg);"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 495px; background-image: url(https://www.dtraduga.by/images/slider/%D0%94%D0%A0.jpg);"></div>
                    </div>
                </div>
            </div>
            <a class="slider__control slider__control_back" href="#" role="button"></a>
            <a class="slider__control slider__control_next" href="#" role="button"></a>
        </div>
        <!-------------------------------SLIDER-------------------------------->

        <div class="main__category">
            <div class="list__category">
                <ul class="items__category">
                    <?php 
                        
                    ?>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/sumka.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a href="<?php echo get_term_link( 31 ,'product_cat') ?>">Аксессуары</a>
                        </div>
                    </li>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/utyug.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a style="line-height: 100%;" href="<?php 
                            echo get_term_link( 32 ,'product_cat') ?>">Бытовая техника и электротовары</a>
                        </div>
                    </li>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/alpaka.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a href="<?php echo get_term_link( 33 ,'product_cat') ?>">Игрушки</a>
                        </div>
                    </li>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/chaynik.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a href="<?php echo get_term_link( 34,'product_cat') ?>">Товары для дома</a>
                        </div>
                    </li>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/zhenskoe.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a href="<?php echo get_term_link( 35 ,'product_cat') ?>">Женщинам</a>
                        </div>
                    </li>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/pidzhak.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a href="<?php echo get_term_link( 36 ,'product_cat') ?>">Мужчинам</a>
                        </div>
                    </li>
                    <li class="item__category">
                        <div class="item-img">
                            <img src="<?php bloginfo('template_directory');?>/img/shveynaya_mashinka.svg" alt="">
                        </div>
                        <div class="item-title">
                            <a href="<?php echo get_term_link( 37 ,'product_cat') ?>">Трикотаж</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    
    <div class="blocks__news">
        <div class="blocks__news-container">
            <div class="block__news">

                <span class="block__news-title">Новости</span>

                <?php 
                $args = array(
                    'category_name' => 'news',
                    'posts_per_page' => 4
                );
                $_posts = new WP_Query($args);
                ?>

                <?php if($_posts->have_posts()):?>


                    <?php while ($_posts->have_posts()): $_posts->the_post();?>
                    <div class="news__tape">
                        <?php if(has_post_thumbnail()):?>
                            <div class="news__img">
                            <img src="<?php the_post_thumbnail_url();?>" href="<?php 
                            // the_permalink();?>">;
                            
                            
                                
                            </div>
                        <?php endif;?>
                        <div class="title__news">
                            <?php the_title();?>
                        </div>
                        <div class="date__added-news">
                            <?php echo get_the_date();?>
                        </div>
                        <div class="text__news">
                            <?php the_excerpt();?>
                        </div>
                    </div>

                    <?php endwhile;?>

                <?php endif;?>
            </div>

            <div class="block__news">

                <span class="block__news-title">Акции</span>

                <?php 
                $args = array(
                    'category_name' => 'stock',
                    'posts_per_page' => 4
                );
                $_posts = new WP_Query($args);
                ?>

                <?php if($_posts->have_posts()):?>


                    <?php while ($_posts->have_posts()): $_posts->the_post();?>
                    <div class="news__tape">
                        <?php if(has_post_thumbnail()):?>
                            <div class="news__img">
                            <img src="<?php the_post_thumbnail_url();?>" href="<?php 
                            // the_permalink();?>">;
                            
                            
                                
                            </div>
                        <?php endif;?>
                        <div class="title__news">
                            <?php the_title();?>
                        </div>
                        <div class="date__added-news">
                            <?php echo get_the_date();?>
                        </div>
                        <div class="text__news">
                            <?php the_excerpt();?>
                        </div>
                    </div>

                    <?php endwhile;?>

                <?php endif;?>
            </div>

            <div class="block__stocks">
					<div id="slyder">
						<div id="polosa">
							<div class="info__img">
								<img class="item" style="background-image: url(https://dtraduga.by/modules/mod_raxo_allmode/tools/tb.php?src=%2Fimages%2F%D0%94%D0%A0.jpg&w=300);">
								<a href="../raduga.by/news_page.html"><button>Подробнее</button></a>
							</div>
							<div class="info__img">
								<img class="item" style="background-image: url(https://dtraduga.by/modules/mod_raxo_allmode/tools/tb.php?src=%2Fimages%2F%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D1%8B.jpg&w=300);">
								<a href="../raduga.by/news_page.html"><button>Подробнее</button></a>
							</div>
							<div class="info__img">
								<img class="item" style="background-image: url(https://www.dtraduga.by/modules/mod_raxo_allmode/tools/tb.php?src=%2Fimages%2F%D0%94%D0%B8%D1%81%D0%BA%D0%BE%D0%BD%D1%82%D0%BD%D1%8B%D0%B5_%D0%BA%D0%B0%D1%80%D1%82%D1%8B.jpg&w=300);">
								<a href="../raduga.by/news_page.html"><button>Подробнее</button></a>
							</div>
							<div class="info__img">
								<img class="item" style="background-image: url(https://dtraduga.by/modules/mod_raxo_allmode/tools/tb.php?src=%2Fimages%2Fnews%2F%D0%95%D0%A0%D0%98%D0%9F_300.jpg&w=300);">
								<a href="../raduga.by/news_page.html"><button>Подробнее</button></a>
							</div>
							<div class="info__img">
								<img class="item" style="background-image: url(https://www.dtraduga.by/modules/mod_raxo_allmode/tools/tb.php?src=%2Fimages%2F%D0%9A%D0%B0%D1%80%D1%82%D1%8B_%D1%80%D0%B0%D1%81%D1%81%D1%80%D0%BE%D1%87%D0%B5%D0%BA.jpg&w=300)">
								<a href="../raduga.by/news_page.html"><button>Подробнее</button></a>
							</div>
						</div>
					</div>
        </div>
    </div>
</main>

<?php get_footer();?>
