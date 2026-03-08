<?php
 /* 
 Template Name: About
 */ 
?>
<?php get_header(); ?>

    <main>
        <?php include 'components/breadcrumbs.php' ?>

        <div class="about">
            <div class="container">
                <div class="about-inner">
                    <div class="about-images">
                        <?php if ( get_field( 'zobrazhennya_ab_b1' ) ) : ?>
                          <div class="about-big-img">
                              <img src="<?php the_field( 'zobrazhennya_ab_b1' ); ?>" alt="concept-img" loading="lazy">
                          </div>
                        <?php endif ?>
                        <div class="about-sm-img">
                            <div class="about-sm-img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-millenium.svg" alt="logo-millenium" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="about-info">
                        <h1><?php the_field( 'zagolovok_ab_b1' ); ?></h1>
                        <?php the_field( 'opys_ab_b1' ); ?>
                        <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="specifications">
          <div class="container">
            <h2 class="title-mob"><?php the_field( 'zagolovok_ab_b2' ); ?></h2>
          </div>
            <div class="specifications-inner">
                <div class="specifications-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/content-img5.jpg" alt="specifications-img" loading="lazy">
                    <div class="specifications-title">
                        <h2><?php the_field( 'zagolovok_ab_b2' ); ?></h2>
                    </div>
                </div>
                <div class="specifications-info">
                    <div class="specifications-text">
                        <div class="specifications-items">
                            <div class="specifications-item">
                                <div class="specifications-item-line">
                                    <p><b>Клас</b></p>
                                    <p><?php the_field( 'klas_ab_b2' ); ?></p>
                                </div>
                                <div class="specifications-item-line">
                                    <p><b>Кількість будинків</b></p>
                                    <p><?php the_field( 'kilkist_budynkiv_ab_b2' ); ?></p>
                                </div>
                                <div class="specifications-item-line">
                                    <p><b>Кількість поверхів</b></p>
                                    <p><?php the_field( 'kilkist_poverhiv_ab_b2' ); ?></p>
                                </div>
                                <div class="specifications-item-line">
                                    <p><b>Технології будівництва</b></p>
                                    <p><?php the_field( 'tehnologiyi_budivnycztva_ab_b2' ); ?></p>
                                </div>
                            </div>
                            <div class="specifications-item">
                                <div class="specifications-item-line">
                                    <p><b>Стан квартири</b></p>
                                    <p><?php the_field( 'stan_kvartyry_ab_b2' ); ?></p>
                                </div>
                                <div class="specifications-item-line">
                                    <p><b>Опалення</b></p>
                                    <p><?php the_field( 'opalennya_ab_b2' ); ?></p>
                                </div>
                                <div class="specifications-item-line">
                                    <p><b>Висота стелі</b></p>
                                    <p><?php the_field( 'vysota_steli_ab_b2' ); ?></p>
                                </div>
                                <div class="specifications-item-line">
                                    <p><b>Матеріал стін</b></p>
                                    <p><?php the_field( 'material_stin_ab_b2' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ( get_field( 'genplan_ab_b3' ) ) : ?>
          <div class="plan">
              <img src="<?php the_field( 'genplan_ab_b3' ); ?>" alt="plan-img" loading="lazy">
          </div>
        <?php endif ?>

        <div class="project">
          <?php if ( have_rows( 'opys_ab_b4' ) ) : ?>
            <?php while ( have_rows( 'opys_ab_b4' ) ) : the_row(); ?>
              <div class="project-inner">
                <div class="project-img">
                  <?php if ( get_sub_field( 'zobrazhennya_opys_ab_b4' ) ) : ?>
                    <img src="<?php the_sub_field( 'zobrazhennya_opys_ab_b4' ); ?>" alt="project-img" loading="lazy">
                  <?php endif ?>
                </div>
                <div class="project-info">
                  <div class="project-text">
                    <?php if( get_sub_field('zagolovok_opys_ab_b4') ): ?>
                        <h3><?php the_sub_field( 'zagolovok_opys_ab_b4' ); ?></h3>
                    <?php else :?>
                    <?php endif; ?>
                    <?php the_sub_field( 'opys_opys_ab_b4' ); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <?php // No rows found ?>
          <?php endif; ?>
        </div>

        <div class="advantages">
            <div class="container">
              <h2><?php the_field( 'zagolovok_ab_b5' ); ?></h2>
              <div class="advantages-slider">
                <div class="swiper advantages-swiper">
                  <div class="swiper-wrapper">
                    <?php if ( have_rows( 'perevagy_ab_b5' ) ) : ?>
                      <?php while ( have_rows( 'perevagy_ab_b5' ) ) : the_row(); ?>
                        <div class="swiper-slide">
                          <?php if ( get_sub_field( 'zobrazhennya-perevagy_ab_b5' ) ) : ?>
                            <img src="<?php the_sub_field( 'zobrazhennya-perevagy_ab_b5' ); ?>" alt="icon" loading="lazy">
                          <?php endif ?>
                          <h3><?php the_sub_field( 'zagolovok_perevagy_ab_b5' ); ?></h3>
                          <p><?php the_sub_field( 'opys-perevagy_ab_b5' ); ?></p>
                        </div>
                      <?php endwhile; ?>
                    <?php else : ?>
                      <?php // No rows found ?>
                    <?php endif; ?>
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

        <div class="gallery-box">
          <div class="container">
            <h2><?php the_field( 'zagolovok_ab_b6' ); ?></h2>
            <div class="gallery-slider">
              <div class="swiper gallery-swiper">
                <div class="swiper-wrapper">
                <?php if ( have_rows( 'galereya_ab_b6' ) ) : ?>
                    <?php while ( have_rows( 'galereya_ab_b6' ) ) : the_row(); ?>
                    <div class="swiper-slide">
                      <div class="gallery-details">
                        <a href="/gallery/">
                          <?php if ( get_sub_field( 'zobrazhennya-galereya_ab_b6' ) ) : ?>
                            <div class="gallery-img">
                              <img src="<?php the_sub_field( 'zobrazhennya-galereya_ab_b6' ); ?>" alt="gallery-img" loading="lazy">
                            </div>
                          <?php endif ?>
                        </a>
                      </div>
                    </div>
                    <?php endwhile; ?>
                  <?php else : ?>
                    <?php // No rows found ?>
                  <?php endif; ?>
                </div>
                <div class="swiper-nav">
                  <div class="swiper-scrollbar progress-scrollbar"></div>
                  <div class="swiper-navigation">
                    <div class="swiper-button-next pr-button-next"></div>
                    <div class="swiper-button-prev pr-button-prev"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>

<?php get_footer();