<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>
<body <?php 
        if (is_category()){

        }
        else{
            body_class();

        }
        ?>>
    <header class="header">
        <div class="header__container">
            <div class="header__menu-category">
                <a href="<?php echo get_page_link( get_page_by_title( 'Категории' )->ID ); ?>"><button id="event" class="but"> Все категории</button></a>
                <div id="menu">
                    <ul class="navigation">
                        <li class="l_i" id="l1">
                            <a href="
                                <?php $id = 31; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                        <li class="l_i" id="l2">
                            <a href="
                                <?php $id = 32; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                        <li class="l_i" id="l3">
                            <a href="
                                <?php $id = 33; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                        <li class="l_i" id="l4">
                            <a href="
                                <?php $id = 34; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                        <li class="l_i" id="l5">
                            <a href="
                                <?php $id = 35; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                        <li class="l_i" id="l6">
                            <a href="
                                <?php $id = 36; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                        <li class="l_i" id="l7">
                            <a href="
                                <?php $id = 37; echo get_term_link( $id ,'product_cat') ?>">
                                <?php 
                                    if( $term = get_term_by( 'id', $id, 'product_cat' ) ){
                                    echo $term->name;
                                };?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header__menu">
                <nav class="menu__body">
                    <?php 
                        wp_nav_menu( 
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'menu__list'
                            )
                        )
                    ?>
                </nav>
            </div>

            <div class="header__icons-social">
                <ul class="menu__social">

                <?php 
                $link = get_field('одноклассники');
                if( $link ): ?>
                    <li><a href="<?php echo esc_url( $link ); ?>" class="menu__link l1">
                        <img src="<?php bloginfo('template_directory');?>/img/od.svg" alt="" class="menu_icons">
                    </a></li>
                <?php endif; ?>

                <?php 
                $link = get_field('вконтакте');
                if( $link ): ?>
                    <li><a href="<?php echo esc_url( $link ); ?>" class="menu__link l2">
                            <img src="<?php bloginfo('template_directory');?>/img/vk.svg" alt="" class="menu_icons">
                        </a></li>
                <?php endif; ?>

                <?php 
                $link = get_field('инстаграм');
                if( $link ): ?>
                    <li><a href="<?php echo esc_url( $link ); ?>" class="menu__link l3">
                            <img src="<?php bloginfo('template_directory');?>/img/inst.svg" alt="" class="menu_icons">
                        </a></li>
                <?php endif; ?>

                <?php 
                $link = get_field('телеграм');
                if( $link ): ?>
                    <li><a href="<?php echo esc_url( $link ); ?>" class="menu__link l4">
                            <img src="<?php bloginfo('template_directory');?>/img/tel.svg" alt="" class="menu_icons">
                        </a></li>
                <?php endif; ?>

                <?php 
                $link = get_field('вайбер');
                if( $link ): ?>
                    <li><a href="<?php echo esc_url( $link ); ?>" class="menu__link l5">
                            <img src="<?php bloginfo('template_directory');?>/img/viber.svg" alt="" class="menu_icons">
                        </a></li>
                <?php endif; ?>

                <?php 
                $link = get_field('фейсбук');
                if( $link ): ?>
                    <li><a href="<?php echo esc_url( $link ); ?>" class="menu__link l6">
                        <img src="<?php bloginfo('template_directory');?>/img/facebook.svg" alt="">
                        </a></li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>
