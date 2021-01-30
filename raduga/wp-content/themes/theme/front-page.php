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
                    <?php if( get_field('image_1') ): ?>
                        <div style="height: 495px; background-image: url(<?php the_field('image_1'); ?>);"></div>
                    <?php endif; ?>             
                    </div>
                    <div class="slider__item">
                    <?php if( get_field('image_2') ): ?>
                        <div style="height: 495px; background-image: url(<?php the_field('image_2'); ?>);"></div>
                    <?php endif; ?>             
                    </div>
                    <div class="slider__item">
                    <?php if( get_field('image_3') ): ?>
                        <div style="height: 495px; background-image: url(<?php the_field('image_3'); ?>);"></div>
                    <?php endif; ?>             
                    </div>
                    <div class="slider__item">
                    <?php if( get_field('image_4') ): ?>
                        <div style="height: 495px; background-image: url(<?php the_field('image_4'); ?>);"></div>
                    <?php endif; ?>             
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

                <?php 
                $args = array(
                    'category_name' => 'news',
                    'posts_per_page' => 4
                );
                $_posts = new WP_Query($args);
                ?>
                <span class="block__news-title">Новости</span>


                <?php if($_posts->have_posts()):?>


                    <?php while ($_posts->have_posts()): $_posts->the_post();?>
                    <div class="news__tape">
                        <?php if(has_post_thumbnail()):?>
                            <div class="news__img">
                                <a href="<?php the_permalink();?>">
                                    <img src="<?php the_post_thumbnail_url();?>">;
                                </a>
                            </div>
                        <?php endif;?>
                        <div class="title__news">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
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
                            <div class="shares__img">
                                <a href="<?php the_permalink();?>">
                                    <img src="<?php the_post_thumbnail_url();?>">;
                                </a>
                            </div>
                        <?php endif;?>
                        <div class="title__news">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
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
                    <?php 
                        $args = array(
                            'category_name' => 'bonus',
                            'posts_per_page' => 4
                        );
                        $_posts = new WP_Query($args);
                    ?>
                    <?php if($_posts->have_posts()):?>
                        <div id="polosa">
                        <?php while ($_posts->have_posts()): $_posts->the_post();?>
                            <?php if(has_post_thumbnail()):?>
                            <div class="info__img">
                                <img class="item" style="background-image: url(<?php the_post_thumbnail_url();?>);">
                                <a href="<?php the_permalink();?>"><button>Подробнее</button></a>
                            </div>
                            <?php endif;?>
                        <?php endwhile;?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
    </div>
</main>

<?php get_footer();?>
