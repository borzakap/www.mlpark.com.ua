<?php

    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Millennium
     */

?>

    <footer>
        <div class="footer-inner">
            <div class="footer-info">
                <div class="footer-details">
                    <h2>Контакти</h2>
                    <div class="columns">
                        <div class="column-item">
                  <p>Відділ продажів: <a href="tel:<?php the_field( 'telefon-site', 'option' ); ?>"><?php the_field( 'telefon-site', 'option' ); ?></a>
</p>
							<p>Графік роботи: Пн-Пт: 09:00-18:00; Сб-Нд: 10:00-16:00</p>
				  <p>Відділ постачання: <a href="mailto:rbuildingm@gmail.com">rbuildingm@gmail.com</a></p>
                  <p><?php the_field( 'adresa-site', 'option' ); ?></p>
                </div>
<!--                     <div class="column-item">
                            <h6>Графік роботи:</h6>
                            <p>Графік роботи:</p>
                            <?php the_field('grafik_roboty-site', 'option'); ?>
                        </div> -->
                    </div>
                    <button class="bingc-action-open-passive-form button-billing">записатись на вiзит</button>
                    <p><?php the_field('copyright-site', 'option'); ?></p>
                </div>
            </div>
            <div class="footer-card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d532.8896816004116!2d30.233553113992482!3d50.55528414798313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b31c4bcdc11c5%3A0x30d6c42e7f9de84e!2z0JrQvtC80L_QsNC90ZbRjyBSLWJ1aWxkaW5nIC0g0JLRltC00LTRltC7INC_0YDQvtC00LDQttGW0LI!5e0!3m2!1sru!2sua!4v1719408263823!5m2!1sru!2sua" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="link">
                    <a href="https://maps.app.goo.gl/98sxWXfc3QygxtXy6" target="_blank">Показати на Google Maps</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/nuslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/filter.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/sliders.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tabs.js"></script>
<?php wp_footer(); ?>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TB4SBQ9V');
</script>
<!-- End Google Tag Manager -->
</body>

</html>