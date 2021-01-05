<?php get_header();?>
<body <?php body_class();?>>
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

<div class="main">
    <div class="main__container">
        <div class="main__catalog">          
            <div class="main__content">
                <?php 
                    do_action( 'woocommerce_before_main_content' );
                ?>
                    <?php woocommerce_content();?>
                    <?php
                    do_action( 'woocommerce_after_main_content' );
                ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>