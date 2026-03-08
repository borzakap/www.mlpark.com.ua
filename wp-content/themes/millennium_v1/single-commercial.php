<?php get_header(); ?>

    <main>
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li>
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна</a> - <a href="/commercial-real-estate/">Комерційна нерухомість</a> <span>- <?= get_the_title(); ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="about-building">
            <div class="container">
                <div class="about-building-box">
                    <div class="about-building-img">
                        <?php echo get_the_post_thumbnail( $page->ID, 'full', array('loading' => 'lazy')); ?>
                    </div>
                    <div class="about-building-descr">
                        <h1><?php the_title(); ?></h1>
                        <ul>
                            <li>Призначення <span><?php the_field( 'pryznachennya_kn' ); ?></span></li>
                            <li class="li-bold">Загальна площа  <span><?php the_field( 'zagalna_ploshha_kn' ); ?></span></li>
                        </ul>
                        <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                    </div>
                </div>
            </div>
        </div>

        <?php if ( get_field( 'genplan_kn' ) ) : ?>
          <div class="plan">
              <img src="<?php the_field( 'genplan_kn' ); ?>" alt="plan-img" loading="lazy">
          </div>
        <?php endif ?>

        <?php if ( get_field( 'plan_poverhu_kn' ) ) : ?>
          <div class="floor-plan">
              <div class="container">
                  <h2>План поверху</h2>
                  <img src="<?php the_field( 'plan_poverhu_kn' ); ?>" alt="floor-plan" loading="lazy">
              </div>
          </div>
        <?php endif ?>
        
        <div class="terms">
            <?php if ( have_rows( 'umovy_prydbannya_kn' ) ) : ?>
              <?php while ( have_rows( 'umovy_prydbannya_kn' ) ) : the_row(); ?>
              <div class="terms-inner">
                <div class="terms-img">
                  <?php if ( get_sub_field( 'zobrazhennya_umovy_prydbannya_kn' ) ) : ?>
                    <img src="<?php the_sub_field( 'zobrazhennya_umovy_prydbannya_kn' ); ?>" alt="project-img" loading="lazy">
                  <?php endif ?>
                </div>
                <div class="terms-info">
                  <div class="terms-text">
                      <?php the_sub_field( 'opys_umovy_prydbannya_kn' ); ?>
                      <a href="#">Отримати консультацію</a>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer();