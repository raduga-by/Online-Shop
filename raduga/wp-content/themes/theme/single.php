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
			<?php 
			if(have_posts()) : while (have_posts()) : the_post();?>

				<div class="title-news">
					<p><?php the_title();?></p>
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
	</main>
<?php get_footer();?>