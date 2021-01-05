<footer class="footer"> 
    <div class="footer__content-container">
        <div class="columns__info">
            <div class="column__info">
                <img src="<?php bloginfo('template_directory');?>/img/footer-logo.svg" alt="" class="footer__logo">
                <p clasa="info__company"></p>
                OOO "Ньюстэйдж"
                УНП 193413900 от 22/04/2020
                В Торговом реестре с 14/05/2020
                Юр. Адрес: 220040, Республика Беларусь
                г. Минск, ул.Максима Богдановича, д.155А,
                помещение 1000
                </p>
            </div>
            <div class="column__info">
                <p class="category__title">Компания</p>
                <span class="category"><a href="/raduga/about-us/">О нас</a></span>
                <span class="category"><a href="/raduga/category/news/">Новости</a></span>
            </div>
            <div class="column__info">
                <p class="catalog__title">Каталог</a></p>
                <span class="catalog"><a href="<?php echo get_term_link( 31 ,'product_cat') ?>">Аксессуары</a></span>
                <span class="catalog"><a href="<?php echo get_term_link( 33 ,'product_cat') ?>">Игрушки</a></span>
                <span class="catalog"><a href="<?php echo get_term_link( 37 ,'product_cat') ?>">Трикотаж</a></span>
                <span class="catalog"><a href="<?php echo get_term_link( 34,'product_cat') ?>">Товары для дома</a></span>
                <span class="catalog"><a style="line-height: 90%;" href="<?php 
                            echo get_term_link( 32 ,'product_cat') ?>">Бытовая техника и Электроника</a></span>
                <span class="catalog"><a href="<?php echo get_term_link( 35 ,'product_cat') ?>">Женщинам</a></span>
                <span class="catalog"><a href="<?php echo get_term_link( 36 ,'product_cat') ?>">Мужчинам</a></span>
            </div>
            <div class="column__info">
                <p class="social__title">Мы в соцсетях</p>
                <span class="social"><a href="https://vk.com/dtraduga">Вконтакте</a></span>
                <span class="social"><a href="https://www.instagram.com/dtraduga/">Инстаграм</a></span>
                <span class="social"><a href="https://ok.ru/domtorgovli">Одноклассники</a></span>
                <span class="social"><a href="https://t.me/dt_raduga">Телеграм</a></span>
                <span class="social"><a href="https://tinyurl.com/y2zw6c37">Вайбер</a></span>
                <span class="social"><a href="https://www.facebook.com/domtorgovliraduga">Facebook</a></span>
            </div>
        </div>
    </div>
    <div class="footer__info">
        <p>Copiryght @2020</p>
        <p>Все права защищены</p>
    </div>
</footer>

<?php wp_footer();?>

</body>
</html>