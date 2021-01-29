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
        <div class="block__news">
            <div class="title">
                <?php 
                    if(is_category( 'news' )){
                        echo 'Новости';
                    }
                    elseif(is_category( 'stock' )){
                        echo 'Акции';
                    }
                ?>
            </div>
            <div class="tape__news">
                
                <?php 
                    if(have_posts()) : while (have_posts()) : the_post();?>
                <div class="card-news">

                    <div class="title-news">
                        <p><?php the_title();?>
                        </p>
                        <a href="<?php 
                        the_permalink();?>">
                        </a>
                    </div>
                    <div class="date">
                        <p><?php echo get_the_date() . ' ' .
                        get_post_time('G:i',true);?></p>
                    </div>

                    <div class="img-news">
                        <img src="<?php the_post_thumbnail_url('news_image');?>">
                    </div>

                    <div class="text-news">
                        <?php the_excerpt();?>
                        
                    </div>

                </div>
                    <?php endwhile; else: endif;?>

            </div>
        </div>
    </div>
</main> 

<?php get_footer();?>