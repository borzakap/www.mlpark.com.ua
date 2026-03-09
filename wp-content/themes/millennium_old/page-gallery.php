<?php
 /* 
 Template Name: Gallery
 */ 
?>
<?php get_header(); ?>

    <main>
        <?php include 'components/breadcrumbs.php' ?>

        <div class="main-gallery">
            <div class="main-gallery-slider">
                <div class="swiper main-gallery-swiper">
                    <div class="swiper-wrapper">
                        <?php if ( have_rows( 'galereya' ) ) : ?>
                            <?php while ( have_rows( 'galereya' ) ) : the_row(); ?>
                                <div class="swiper-slide">
                                    <?php if ( get_sub_field( 'zobrazhennya-galereya' ) ) : ?>
                                        <div class="main-gallery-details">
                                            <img src="<?php the_sub_field( 'zobrazhennya-galereya' ); ?>" alt="gallery-img" loading="lazy">
                                        </div>
                                    <?php endif ?>
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
    </main>

<?php get_footer();