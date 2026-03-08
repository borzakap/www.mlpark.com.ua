<?php
 /* 
 Template Name: Commercial real estate
 */ 
?>
<?php get_header(); ?>

    <main>
        <?php include 'components/breadcrumbs.php' ?>

        <div class="com-text">
            <div class="container">
              <div class="com-text-box">
                <div class="com-text-images">
                    <?php if ( get_field( 'zobrazhennya_1_com-b1' ) ) : ?>
                        <div class="com-text-big-img">
                            <img src="<?php the_field( 'zobrazhennya_1_com-b1' ); ?>" alt="concept-img" loading="lazy">
                        </div>
                    <?php endif ?>
                    <?php if ( get_field( 'zobrazhennya_2_com-b1' ) ) : ?>
                        <div class="com-text-sm-img">
                            <img src="<?php the_field( 'zobrazhennya_2_com-b1' ); ?>" alt="concept-img" loading="lazy">
                        </div>
                    <?php endif ?>
                </div>
                <div class="com-text-text">
                  <h1><?php the_field( 'zagolovok_com-b1' ); ?></h1>
                  <?php the_field( 'opys_com-b1' ); ?>
                  <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                </div>
              </div>
            </div>
        </div>

        <div class="real-estate">
            <div class="container">
                <?php include 'components/genplan_commers.php' ?>
                <?php include 'components/genplan_commers_3-4.php' ?>
                <div class="real-estate-slider">
                    <div class="swiper real-estate-swiper">
                      <div class="swiper-wrapper">
                            <?php
                                $args = array(
                                    'post_type' => 'commercial',
                                    'posts_per_page' => -1,
    
                                );
                                $commercial = new WP_Query( $args );

                                if ( $commercial->have_posts() ) {
                                    while ( $commercial->have_posts() ) {
                                        $commercial->the_post(); ?>

                                        <div class="swiper-slide">
                                            
                                                <div class="real-estate-details">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="real-estate-img">
                                                            <?php echo get_the_post_thumbnail( $page->ID, 'full', array('loading' => 'lazy')); ?>
                                                        </div>
                                                        <div class="real-estate-descr">
                                                            <div class="real-estate-text">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="68" viewBox="0 0 35 68" fill="none">
                                                                            <path d="M33.6261 0C33.8624 0.0486892 34.1047 0.0912923 34.341 0.139981C34.9044 0.261705 35.0923 0.492978 34.959 1.05899C34.7772 1.8015 34.5652 2.53793 34.2865 3.25001C33.3353 5.72707 32.2932 8.16761 30.9724 10.4743C29.8576 12.434 28.446 14.1807 27.004 15.9031C25.2531 17.9846 23.3446 19.9078 21.2059 21.5876C18.8127 23.4621 16.25 25.0628 13.5539 26.4504C11.0759 27.7346 8.50097 28.7875 5.82912 29.597C5.01727 29.8404 4.54469 30.3516 4.37505 31.2159C4.03577 32.9261 3.59955 34.6241 3.26633 36.3343C2.99975 37.7037 2.79375 39.0914 2.63017 40.479C2.44841 42.0127 2.32724 43.5586 2.21213 45.1045C2.15154 45.9444 2.10913 46.7842 2.13942 47.6241C2.20607 49.6752 2.27877 51.7323 2.42418 53.7772C2.70287 57.715 3.35721 61.604 4.10847 65.4748C4.24782 66.1991 4.39929 66.9172 4.5447 67.6415C4.55681 67.6963 4.56287 67.7571 4.57499 67.8484C4.28417 67.8728 3.99942 67.9032 3.71466 67.9275C3.42385 67.9519 3.13304 67.9519 2.84828 67.9945C2.67258 68.0188 2.61805 67.9641 2.5817 67.7997C2.24242 66.2964 1.85467 64.8053 1.56385 63.296C1.19428 61.4093 0.867111 59.5104 0.588414 57.6054C0.382421 56.1995 0.261249 54.7815 0.17037 53.3634C0.0673735 51.781 0.00678801 50.1986 0.000729386 48.6101C-0.0113879 46.1878 0.127959 43.7777 0.382421 41.3676C0.891345 36.5595 1.81831 31.8367 3.2845 27.2355C4.8658 22.2631 7.13779 17.6255 10.1792 13.3834C12.9662 9.4944 16.4923 6.43915 20.6243 4.06555C23.6354 2.33708 26.8283 1.08942 30.2151 0.340824C30.8876 0.194757 31.5783 0.139981 32.2568 0.0426031C32.3295 0.0304308 32.3962 0.0121723 32.4689 0C32.8566 0 33.2383 0 33.6261 0ZM32.0387 3.14654C32.0508 2.56227 31.8691 2.36751 31.4692 2.36751C31.3238 2.36751 31.1723 2.36751 31.0269 2.41012C30.6271 2.51967 30.2272 2.62922 29.8334 2.76311C25.4651 4.20553 21.4725 6.36611 17.7888 9.10488C16.5953 9.99346 15.4078 10.8881 14.4021 11.9897C10.67 16.0735 7.86482 20.7294 6.023 25.9635C5.95635 26.1522 5.91394 26.353 5.88365 26.5478C5.81701 27.0286 6.08358 27.2964 6.56222 27.2173C6.78638 27.1808 7.01055 27.1138 7.22261 27.0286C10.9002 25.574 14.3415 23.6812 17.5768 21.4111C19.0309 20.3886 20.4668 19.3418 21.7209 18.082C24.8047 14.978 27.4584 11.5393 29.7001 7.7781C30.4271 6.56087 31.0754 5.29495 31.7297 4.0412C31.8994 3.71864 31.9721 3.34738 32.0387 3.15871V3.14654Z" fill="#123E3C"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="text">
                                                                    <h6><?php the_title(); ?></h6>
                                                                    <p>Загальна площа: <?php the_field( 'zagalna_ploshha_kn' ); ?> кв.м</p>
                                                                </div>
                                                            </div>
                                                            <p>Ознайомитись</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            
                                        </div>
                                    <?php
                                  }
                                 /* Restore original Post Data */
                                 wp_reset_postdata();
                                     }
                        ?>
                      </div>
                      <div class="swiper-nav">
                        <div class="swiper-scrollbar"></div>
                        <div class="swiper-navigation">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="posts">
            <div class="container">
                <div class="posts-items">
                    <?php if (have_rows('pro_nas_b2')) : ?>
                        <?php while (have_rows('pro_nas_b2')) : the_row(); ?>
                            <div class="post-item">
                                <?php if (get_sub_field('zobrazhennya-pro_nas_b2')) : ?>
                                    <img src="<?php the_sub_field('zobrazhennya-pro_nas_b2'); ?>" alt="post-img" loading="lazy">
                                    <?php endif ?>
                                    <h6><?php the_sub_field('zagolovok-pro_nas_b2'); ?></h6>
                                    <p><?php the_sub_field('opys-pro_nas_b2'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </main>

<?php get_footer();