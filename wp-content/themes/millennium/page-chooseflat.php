<?php
/* 
 Template Name: Choose Flat
 */
?>
<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
$meta_queries = [];

if (isset($_GET['filter-property']) && $_GET['filter-property'] !== 'any')
    $meta_queries[] = [
        'key' => 'number_of_budynok',
        'value' => $_GET['filter-property'],
        'compare'     => '='
    ];

if (isset($_GET['filter-number']) && $_GET['filter-number'] !== 'any')
    $meta_queries[] = [
        'key' => 'typ_kvartyry',
        'value' => $_GET['filter-number'],
        'compare'     => '='
    ];

if (isset($_GET['filter-area-from']) && isset($_GET['filter-area-to']))
    $meta_queries[] = [
        'key' => 'area',
        'value' => [$_GET['filter-area-from'], $_GET['filter-area-to']],
        'compare'     => 'BETWEEN',
        'type' => 'NUMERIC',
    ];

$meta_queries = ['relation' => 'AND'] + $meta_queries;

$args = [
    'post_type' => 'apartment',
    'posts_per_page' => 12,
    'paged' => $paged,
    'meta_query' => $meta_queries,
    // 'meta_key' => 'price',
    // 'orderby' => 'meta_value_num',
    // 'order' => $_GET['order'] ?? 'ASC'
];

$apartment = new WP_Query($args);
?>



<main>
    <?php include 'components/breadcrumbs.php' ?>

    <div class="flats">
        <div class="container">
            <h1>Обрати квартиру</h1>

            <!-- <div class="flats-filter">
                    <div class="flats-filter-box">
                        <div class="house-filter">
                            <p><b>Обрати будинок</b></p>
                            <select>
                                <option>Всі будинки</option>
                                <option>Будинок 1</option>
                                <option>Будинок 2</option>
                            </select>
                        </div>
                        <div class="type-filter">
                            <p><b>Тип квартири</b></p>
                            <select>
                                <option>Всі планування</option>
                                <option>Планування 1</option>
                                <option>Планування 2</option>
                            </select>
                        </div>
                        <div class="squere-filter">
                            <p><b>Площа, кв.м</b></p>
                            <div class="squere-wrapper">
                                <div class="range_container">
                                    <div class="sliders_control">
                                       <input id="fromSlider" type="range" value="10" min="10" max="50"/>
                                       <input id="toSlider" type="range" value="30" min="10" max="50"/>
                                    </div>
                                    <div class="form_control">
                                        <div class="form_control_container">
                                            <input class="form_control_container__time__input" type="text" id="fromInput" value="10" min="10" max="50"/>
                                        </div>
                                        <div class="form_control_container">
                                          <input class="form_control_container__time__input" type="text" id="toInput" value="30" min="10" max="50"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flats-filter-link">
                        <a href="#">Підібрати</a>
                    </div>
                    <div class="filter-mob">
                        <div class="filter-title">
                            <p  class="filter-link">Розширений пошук</p>
                            <div class="filter-list">
                                <div class="house-filterr">
                                    <p><b>Обрати будинок</b></p>
                                    <select>
                                        <option>Всі будинки</option>
                                        <option>Будинок 1</option>
                                        <option>Будинок 2</option>
                                    </select>
                                </div>
                                <div class="type-filterr">
                                    <p><b>Тип квартири</b></p>
                                    <select>
                                        <option>Всі планування</option>
                                        <option>Планування 1</option>
                                        <option>Планування 2</option>
                                    </select>
                                </div>
                                <div class="squere-filterr">
                                    <p><b>Площа, кв.м</b></p>
                                    <div class="squere-wrapperr">
                                        <div class="range_container">
                                            <div class="sliders_control">
                                               <input id="fromSlider" type="range" value="10" min="10" max="50"/>
                                               <input id="toSlider" type="range" value="30" min="10" max="50"/>
                                            </div>
                                            <div class="form_control">
                                                <div class="form_control_container">
                                                    <input class="form_control_container__time__input" type="text" id="fromInput" value="10" min="10" max="50"/>
                                                </div>
                                                <div class="form_control_container">
                                                  <input class="form_control_container__time__input" type="text" id="toInput" value="30" min="10" max="50"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flats-filter-link-mob">
                                    <a href="#">Підібрати</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> -->
            <h2 id="building3">Будинок 3</h2>
            <?php include 'components/genplan_flat_5-7.php' ?>
            <h2 id="building2">Будинок 2</h2>
            <?php include 'components/genplan_flat_3-4.php' ?>
            <h2 id="building1">Будинок 1</h2>
            <?php include 'components/genplan_flat.php' ?>

            <?php include 'components/filter.php' ?>

            <div class="flats-cards">
                <?php
                while ($apartment->have_posts()) :
                    $apartment->the_post();
                ?>
                    <div class="flat-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="flat-details">
                                <div class="flat-img">
                                    <?php echo get_the_post_thumbnail($page->ID ?? null, 'full', array('loading' => 'lazy')); ?>
                                </div>
                                <div class="flat-descr">
                                    <div class="flat-descr-row">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="68" viewBox="0 0 35 68" fill="none">
                                                <path d="M33.6261 0C33.8624 0.0486892 34.1047 0.0912923 34.341 0.139981C34.9044 0.261705 35.0923 0.492978 34.959 1.05899C34.7772 1.8015 34.5652 2.53793 34.2865 3.25001C33.3353 5.72707 32.2932 8.16761 30.9724 10.4743C29.8576 12.434 28.446 14.1807 27.004 15.9031C25.2531 17.9846 23.3446 19.9078 21.2059 21.5876C18.8127 23.4621 16.25 25.0628 13.5539 26.4504C11.0759 27.7346 8.50097 28.7875 5.82912 29.597C5.01727 29.8404 4.54469 30.3516 4.37505 31.2159C4.03577 32.9261 3.59955 34.6241 3.26633 36.3343C2.99975 37.7037 2.79375 39.0914 2.63017 40.479C2.44841 42.0127 2.32724 43.5586 2.21213 45.1045C2.15154 45.9444 2.10913 46.7842 2.13942 47.6241C2.20607 49.6752 2.27877 51.7323 2.42418 53.7772C2.70287 57.715 3.35721 61.604 4.10847 65.4748C4.24782 66.1991 4.39929 66.9172 4.5447 67.6415C4.55681 67.6963 4.56287 67.7571 4.57499 67.8484C4.28417 67.8728 3.99942 67.9032 3.71466 67.9275C3.42385 67.9519 3.13304 67.9519 2.84828 67.9945C2.67258 68.0188 2.61805 67.9641 2.5817 67.7997C2.24242 66.2964 1.85467 64.8053 1.56385 63.296C1.19428 61.4093 0.867111 59.5104 0.588414 57.6054C0.382421 56.1995 0.261249 54.7815 0.17037 53.3634C0.0673735 51.781 0.00678801 50.1986 0.000729386 48.6101C-0.0113879 46.1878 0.127959 43.7777 0.382421 41.3676C0.891345 36.5595 1.81831 31.8367 3.2845 27.2355C4.8658 22.2631 7.13779 17.6255 10.1792 13.3834C12.9662 9.4944 16.4923 6.43915 20.6243 4.06555C23.6354 2.33708 26.8283 1.08942 30.2151 0.340824C30.8876 0.194757 31.5783 0.139981 32.2568 0.0426031C32.3295 0.0304308 32.3962 0.0121723 32.4689 0C32.8566 0 33.2383 0 33.6261 0ZM32.0387 3.14654C32.0508 2.56227 31.8691 2.36751 31.4692 2.36751C31.3238 2.36751 31.1723 2.36751 31.0269 2.41012C30.6271 2.51967 30.2272 2.62922 29.8334 2.76311C25.4651 4.20553 21.4725 6.36611 17.7888 9.10488C16.5953 9.99346 15.4078 10.8881 14.4021 11.9897C10.67 16.0735 7.86482 20.7294 6.023 25.9635C5.95635 26.1522 5.91394 26.353 5.88365 26.5478C5.81701 27.0286 6.08358 27.2964 6.56222 27.2173C6.78638 27.1808 7.01055 27.1138 7.22261 27.0286C10.9002 25.574 14.3415 23.6812 17.5768 21.4111C19.0309 20.3886 20.4668 19.3418 21.7209 18.082C24.8047 14.978 27.4584 11.5393 29.7001 7.7781C30.4271 6.56087 31.0754 5.29495 31.7297 4.0412C31.8994 3.71864 31.9721 3.34738 32.0387 3.15871V3.14654Z" fill="#123E3C" />
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <h6><?php the_title(); ?></h6>
                                            <p>Загальна площа: <?php the_field('area'); ?> кв.м</p>
                                            <p>Житлова площа: <?php the_field('zhytlova_ploshha'); ?> кв.м</p>
                                        </div>
                                    </div>
                                    <p>Ознайомитись</p>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php
                endwhile; // End of the loop.

                wp_reset_postdata();
                ?>

                <!-- <div class="flat-card">
                        <a href="#">
                            <div class="flat-details">
                                <div class="flat-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/content-img11.jpg" alt="flat-img" loading="lazy">
                                </div>
                                <div class="flat-descr">
                                    <div class="flat-descr-row">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="68" viewBox="0 0 35 68" fill="none">
                                                <path d="M33.6261 0C33.8624 0.0486892 34.1047 0.0912923 34.341 0.139981C34.9044 0.261705 35.0923 0.492978 34.959 1.05899C34.7772 1.8015 34.5652 2.53793 34.2865 3.25001C33.3353 5.72707 32.2932 8.16761 30.9724 10.4743C29.8576 12.434 28.446 14.1807 27.004 15.9031C25.2531 17.9846 23.3446 19.9078 21.2059 21.5876C18.8127 23.4621 16.25 25.0628 13.5539 26.4504C11.0759 27.7346 8.50097 28.7875 5.82912 29.597C5.01727 29.8404 4.54469 30.3516 4.37505 31.2159C4.03577 32.9261 3.59955 34.6241 3.26633 36.3343C2.99975 37.7037 2.79375 39.0914 2.63017 40.479C2.44841 42.0127 2.32724 43.5586 2.21213 45.1045C2.15154 45.9444 2.10913 46.7842 2.13942 47.6241C2.20607 49.6752 2.27877 51.7323 2.42418 53.7772C2.70287 57.715 3.35721 61.604 4.10847 65.4748C4.24782 66.1991 4.39929 66.9172 4.5447 67.6415C4.55681 67.6963 4.56287 67.7571 4.57499 67.8484C4.28417 67.8728 3.99942 67.9032 3.71466 67.9275C3.42385 67.9519 3.13304 67.9519 2.84828 67.9945C2.67258 68.0188 2.61805 67.9641 2.5817 67.7997C2.24242 66.2964 1.85467 64.8053 1.56385 63.296C1.19428 61.4093 0.867111 59.5104 0.588414 57.6054C0.382421 56.1995 0.261249 54.7815 0.17037 53.3634C0.0673735 51.781 0.00678801 50.1986 0.000729386 48.6101C-0.0113879 46.1878 0.127959 43.7777 0.382421 41.3676C0.891345 36.5595 1.81831 31.8367 3.2845 27.2355C4.8658 22.2631 7.13779 17.6255 10.1792 13.3834C12.9662 9.4944 16.4923 6.43915 20.6243 4.06555C23.6354 2.33708 26.8283 1.08942 30.2151 0.340824C30.8876 0.194757 31.5783 0.139981 32.2568 0.0426031C32.3295 0.0304308 32.3962 0.0121723 32.4689 0C32.8566 0 33.2383 0 33.6261 0ZM32.0387 3.14654C32.0508 2.56227 31.8691 2.36751 31.4692 2.36751C31.3238 2.36751 31.1723 2.36751 31.0269 2.41012C30.6271 2.51967 30.2272 2.62922 29.8334 2.76311C25.4651 4.20553 21.4725 6.36611 17.7888 9.10488C16.5953 9.99346 15.4078 10.8881 14.4021 11.9897C10.67 16.0735 7.86482 20.7294 6.023 25.9635C5.95635 26.1522 5.91394 26.353 5.88365 26.5478C5.81701 27.0286 6.08358 27.2964 6.56222 27.2173C6.78638 27.1808 7.01055 27.1138 7.22261 27.0286C10.9002 25.574 14.3415 23.6812 17.5768 21.4111C19.0309 20.3886 20.4668 19.3418 21.7209 18.082C24.8047 14.978 27.4584 11.5393 29.7001 7.7781C30.4271 6.56087 31.0754 5.29495 31.7297 4.0412C31.8994 3.71864 31.9721 3.34738 32.0387 3.15871V3.14654Z" fill="#123E3C"/>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <h6>1-кімнатна квартира</h6>
                                            <p>Загальна площа: 55 кв.м</p>
                                            <p>Житлова площа: 55 кв.м</p>
                                        </div>
                                    </div>
                                    <p>Ознайомитись</p>
                                </div>
                            </div>
                        </a>
                    </div> -->

            </div>


            <div class="pagination">
                <ul>
                    <?php
                    $big = 999999999;

                    echo paginate_links(array(
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $apartment->max_num_pages,
                        'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7461 3.6665L6.41273 10.9998L13.7461 18.3332L15.584 16.4998L10.0794 10.9998L15.584 5.49984L13.7461 3.6665Z" fill="#B8CEBB"/>
                     </svg>'),
                        'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25393 3.6665L15.5873 10.9998L8.25393 18.3332L6.41602 16.4998L11.9206 10.9998L6.41602 5.49984L8.25393 3.6665Z" fill="#B8CEBB"/>
                     </svg>'),
                    ));
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<div class="concept2">
    <div class="container">
        <div class="concept2-box">
            <div class="concept2-images">
                <div class="concept2-big-img">
                    <img src="http://mlpark.com.ua/wp-content/uploads/2025/05/terrace_index_640.jpg" alt="concept-img" loading="lazy">
                </div>
            </div>
            <div class="concept2-text">
                <h3>Квартири з терасами</h3>
                <p>Тераси не просто додатковий простір, а справжнє поле для творчості. Багатофункціональний простір, який може бути адаптований під будь-які потреби та вподобання мешканців. В залежності від площі, ви можете облаштувати тут:</p>
                <ul>
                    <li><strong>✓ Зону для відпочинку</strong>.</li>
                    <li><strong>✓ Спортивний куточок</strong>.</li>
                    <li><strong>✓ Дитячий майданчик</strong>.</li>
                    <li><strong>✓ Робочий кабінет</strong>.</li>
                </ul>
                <a href="/choose-flat/">Обрати квартиру з терасою</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
