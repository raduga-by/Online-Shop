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
			<div class="sidebar__inner">
				<aside class="sidebar">
					<div class="nav__block">
						<p><a class="nav-element" href="">Новости и Акции</a></p>
						<p><a class="nav-element" href="">Бонусы</a></p>
						<p><a class="nav-element" href="">Архив</a></p>
						<p><a class="nav-element" href="">Архив</a></p>
					</div>
				</aside>
			</div>
			<div class="block__news">
				<div class="title">
					Новости и Акции
				</div>

				<div class="tape__news">
                    <div class="card-news">

                        <?php 
                        if(have_posts()) : while (have_posts()) : the_post();?>

						<div class="title-news">
                            <a href="<?php the_permalink();?>">
                                <p><?php the_title();?></p>
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

                        <?php endwhile; else: endif;?>

					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer();?>