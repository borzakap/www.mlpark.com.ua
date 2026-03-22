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
                    <?php if (get_field('zobrazhennya-b1')) : ?>
                        <div class="about-big-img">
                            <img src="<?php the_field('zobrazhennya-b1'); ?>" alt="concept-img" loading="lazy">
                        </div>
                    <?php endif ?>
                    <div class="about-sm-img">
                        <div class="about-sm-img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-builder.svg" alt="logo-builder" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="about-info">
                    <h1><?php the_field('zagolovok_b1'); ?></h1>
                    <?php the_field('opys-b1'); ?>
                    <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
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
                    <?php // No rows found 
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php include 'components/complex.php' ?>

</main>

<?php get_footer();
