<?php
 /* 
 Template Name: Terms Purchase
 */ 
?>
<?php get_header(); ?>

    <main>
        <?php include 'components/breadcrumbs.php' ?>

        <div class="terms">
          <?php if ( have_rows( 'umovy_prydbannya' ) ) : ?>
            <?php while ( have_rows( 'umovy_prydbannya' ) ) : the_row(); ?>
              <div class="terms-inner">
                <?php if ( get_sub_field( 'zobrazhennya_umovy_prydbannya' ) ) : ?>
                  <div class="terms-img">
                    <img src="<?php the_sub_field( 'zobrazhennya_umovy_prydbannya' ); ?>" alt="project-img" loading="lazy">
                  </div>
                <?php endif ?>
                <div class="terms-info">
                  <div class="terms-text">
                      <h2><?php the_sub_field( 'zagolovok-umovy_prydbannya' ); ?></h2>
                      <?php the_sub_field( 'opys_umovy_prydbannya' ); ?>
                      <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
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