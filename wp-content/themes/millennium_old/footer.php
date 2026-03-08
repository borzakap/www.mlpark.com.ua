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
                <h6>Головний офіс:</h6>
                <p>Адреса:</p>
                <p><?php the_field( 'adresa-site', 'option' ); ?></p>
                <p>Телефон:</p>
                <a href="tel:<?php the_field( 'telefon-site', 'option' ); ?>"><?php the_field( 'telefon-site', 'option' ); ?></a>
              </div>
              <div class="column-item">
                <h6>Графік роботи:</h6>
                <p>Графік роботи:</p>
                <?php the_field( 'grafik_roboty-site', 'option' ); ?>
              </div>
            </div>
            <button class="bingc-action-open-passive-form button-billing">записатись на вiзит</button>
            <p><?php the_field( 'copyright-site', 'option' ); ?></p>
          </div>
        </div>
        <div class="footer-card">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.8659407187906!2d30.234193400000002!3d50.555263000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b31e9bdbe8189%3A0x385dd22038bf4a00!2z0YPQuy4g0KjQtdCy0YfQtdC90LrQviwgMjbQsiwg0JHRg9GH0LAsINCa0LjQtdCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDA4Mjky!5e0!3m2!1sru!2sua!4v1703260089770!5m2!1sru!2sua" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="link">
            <a href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%A8%D0%B5%D0%B2%D1%87%D0%B5%D0%BD%D0%BA%D0%BE,+26%D0%B2,+%D0%91%D1%83%D1%87%D0%B0,+%D0%9A%D0%B8%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+08292/@50.555263,30.2341934,17z/data=!4m6!3m5!1s0x472b31e9bdbe8189:0x385dd22038bf4a00!8m2!3d50.555263!4d30.2341934!16s%2Fg%2F11p5zhwv67" target="_blank">Показати на Google Maps</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/nuslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/filter.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/sliders.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/tabs.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TB4SBQ9V');</script>
<!-- End Google Tag Manager -->
</body>
</html>