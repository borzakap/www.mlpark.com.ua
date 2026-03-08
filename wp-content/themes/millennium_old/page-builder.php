<?php
 /* 
 Template Name: About Builder
 */ 
?>
<?php get_header(); ?>

    <main>
        <?php include 'components/breadcrumbs.php' ?>

        <div class="about">
            <div class="container">
                <div class="about-inner">
                    <div class="about-images">
                        <?php if ( get_field( 'zobrazhennya-b1' ) ) : ?>
                            <div class="about-big-img">
                                <img src="<?php the_field( 'zobrazhennya-b1' ); ?>" alt="concept-img" loading="lazy">
                            </div>
                        <?php endif ?>
                        <div class="about-sm-img">
                            <div class="about-sm-img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-builder.svg" alt="logo-builder" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="about-info">
                        <h1><?php the_field( 'zagolovok_b1' ); ?></h1>
                        <?php the_field( 'opys-b1' ); ?>
                        <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="container">
                <div class="posts-items">
                    <?php if ( have_rows( 'pro_nas_b2' ) ) : ?>
                        <?php while ( have_rows( 'pro_nas_b2' ) ) : the_row(); ?>
                            <div class="post-item">
                                <?php if ( get_sub_field( 'zobrazhennya-pro_nas_b2' ) ) : ?>
                                    <img src="<?php the_sub_field( 'zobrazhennya-pro_nas_b2' ); ?>" alt="post-img" loading="lazy">
                                <?php endif ?>
                                <h6><?php the_sub_field( 'zagolovok-pro_nas_b2' ); ?></h6>
                                <p><?php the_sub_field( 'opys-pro_nas_b2' ); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="complex">
            <div class="container">
                <h2><?php the_field( 'zagolovok_b3' ); ?></h2>
                <div class="complex-items">
                    <?php if ( have_rows( 'nashi_komlpeksy-big_b3' ) ) : ?>
                        <?php while ( have_rows( 'nashi_komlpeksy-big_b3' ) ) : the_row(); ?>
                            <div class="complex-item complex-item-big">
                                <a href="<?php the_sub_field( 'posylannya-nashi_komlpeksy-big_b3' ); ?>">
                                    <?php if ( get_sub_field( 'zobrazhennya-nashi_komlpeksy-big_b3' ) ) : ?>
                                        <img src="<?php the_sub_field( 'zobrazhennya-nashi_komlpeksy-big_b3' ); ?>" alt="ЖК Idilika Avenue" loading="lazy">
                                    <?php endif ?>
                                    <h3><?php the_sub_field( 'nazva-nashi_komlpeksy-big_b3' ); ?></h3>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>

                    <?php if ( have_rows( 'nashi_komlpeksy_b3' ) ) : ?>
                        <?php while ( have_rows( 'nashi_komlpeksy_b3' ) ) : the_row(); ?>
                        <div class="complex-item">
                            <a href="<?php the_sub_field( 'posylannya-nashi_komlpeksy_b3' ); ?>">
                                <?php if ( get_sub_field( 'zobrazhennya-nashi_komlpeksy_b3' ) ) : ?>
                                    <img src="<?php the_sub_field( 'zobrazhennya-nashi_komlpeksy_b3' ); ?>" alt="ЖК Millennium City" loading="lazy">
                                <?php endif ?>
                                <h3><?php the_sub_field( 'nazva-nashi_komlpeksy_b3' ); ?></h3>
                            </a>
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