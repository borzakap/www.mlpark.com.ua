<div class="complex">
    <div class="container">
        <h2><?php the_field('zagolovok_b3', 19); ?></h2>
        <div class="complex-items">
            <?php if (have_rows('nashi_komlpeksy-big_b3', 19)) : ?>
                <?php while (have_rows('nashi_komlpeksy-big_b3', 19)) : the_row(); ?>
                    <div class="complex-item complex-item-big">
                        <a href="<?php the_sub_field('posylannya-nashi_komlpeksy-big_b3'); ?>">
                            <?php if (get_sub_field('zobrazhennya-nashi_komlpeksy-big_b3')) : ?>
                                <img src="<?php the_sub_field('zobrazhennya-nashi_komlpeksy-big_b3'); ?>" alt="ЖК Idilika Avenue" loading="lazy">
                            <?php endif ?>
                            <h3><?php the_sub_field('nazva-nashi_komlpeksy-big_b3'); ?></h3>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found 
                ?>
            <?php endif; ?>

            <?php if (have_rows('nashi_komlpeksy_b3', 19)) : ?>
                <?php while (have_rows('nashi_komlpeksy_b3', 19)) : the_row(); ?>
                    <div class="complex-item">
                        <a href="<?php the_sub_field('posylannya-nashi_komlpeksy_b3'); ?>">
                            <?php if (get_sub_field('zobrazhennya-nashi_komlpeksy_b3')) : ?>
                                <img src="<?php the_sub_field('zobrazhennya-nashi_komlpeksy_b3'); ?>" alt="ЖК Millennium City" loading="lazy">
                            <?php endif ?>
                            <h3><?php the_sub_field('nazva-nashi_komlpeksy_b3'); ?></h3>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found 
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>