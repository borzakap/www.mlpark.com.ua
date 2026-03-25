<?php
/* 
 Template Name: Terrace real estate
 */
?>
<?php get_header(); ?>

<main>
    <?php include 'components/breadcrumbs.php' ?>

    <div class="com-text">
        <div class="container">
            <div class="com-text-box">
                <div class="com-text-images">
                    <?php if (get_field('zobrazhennya_1_terr-b1')) : ?>
                        <div class="com-text-big-img">
                            <img src="<?php the_field('zobrazhennya_1_terr-b1'); ?>" alt="concept-img" loading="lazy">
                        </div>
                    <?php endif ?>
                    <?php if (get_field('zobrazhennya_2_terr-b1')) : ?>
                        <div class="com-text-sm-img">
                            <img src="<?php the_field('zobrazhennya_2_terr-b1'); ?>" alt="concept-img" loading="lazy">
                        </div>
                    <?php endif ?>
                </div>
                <div class="com-text-text">
                    <h1><?php the_field('zagolovok_terr-b1'); ?></h1>
                    <?php the_field('opys_terr-b1'); ?>
                    <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                </div>
            </div>
        </div>
    </div>

    <div class="real-estate">
        <div class="container">
            <h2 id="building1">Будинок 3</h2>
            <?php include 'components/genplan_terrace_5-6-7.php' ?>
        </div>
    </div>
    <div class="posts">
        <div class="container">
            <div class="posts-items">
                <?php if (have_rows('pro_nas_b2_terr')) : ?>
                    <?php while (have_rows('pro_nas_b2_terr')) : the_row(); ?>
                        <div class="post-item">
                            <?php if (get_sub_field('zobrazhennya-pro_nas_b2_terr')) : ?>
                                <img src="<?php the_sub_field('zobrazhennya-pro_nas_b2_terr'); ?>" alt="post-img" loading="lazy">
                            <?php endif ?>
                            <h6><?php the_sub_field('zagolovok-pro_nas_b2_terr'); ?></h6>
                            <p><?php the_sub_field('opys-pro_nas_b2_terr'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found 
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</main>

<?php get_footer();
