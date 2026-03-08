<?php get_header(); ?>

    <main>
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Головна</a> - <a href="/choose-flat/">Квартири</a> <span>- <?= get_the_title(); ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flat-plan">
            <div class="container">
                <div class="flat-plan-box">
                    
                    <div class="flat-plan-img">
                        <a data-fancybox="" href="<?php the_field('img_vel_kv'); ?>" loading="lazy">
                            <?php echo get_the_post_thumbnail( $page->ID, 'full', array('loading' => 'lazy')); ?>
                        </a>
                    </div>
                    
                    <div class="flat-plan-main">
                        <h1><?php the_title(); ?></h1>
                        <h6>План поверху</h6>
						
                        	<img src="<?php the_field('plan_poverhu_kv'); ?>" alt="flat-plan" loading="lazy">
						
                    </div>
                    <div class="flat-plan-list">
                        <h1 class="mob-title"><?php the_title(); ?></h1>
                        <ul>
							<?php while (have_rows('harakterystyky_kv')):the_row(); ?>
                  				<li><?php the_sub_field('nazva-harakterystyky_kv'); ?> <span><?php the_sub_field('znachennya-harakterystyky_kv'); ?></span></li>
         					<?php endwhile; ?>
                            <li class="li-bold">Житлова площа <span><?php the_field( 'zhytlova_ploshha' ); ?></span></li>
                            <li class="li-bold">Загальна площа <span><?php the_field( 'area' ); ?></span></li>
                        </ul>
                        <button class="bingc-action-open-passive-form button-billing">запис на візит</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="terms">
            <?php if ( have_rows( 'umovy_prydbannya' ) ) : ?>
                <?php while ( have_rows( 'umovy_prydbannya' ) ) : the_row(); ?>
                <div class="terms-inner">
                    <div class="terms-img">
                    <?php if ( get_sub_field( 'zobrazhennya_umovy_prydbannya' ) ) : ?>
                        <img src="<?php the_sub_field( 'zobrazhennya_umovy_prydbannya' ); ?>" alt="project-img" loading="lazy">
                    <?php endif ?>
                    </div>
                    <div class="terms-info">
                        <div class="terms-text">
                            <?php the_sub_field( 'opys_umovy_prydbannya' ); ?>
                            <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>

			<!-- Genplan scheme -->

        <?php if ( get_field( 'genplan_scheme' ) ) : ?>
          <div class="plan-2">
			  <div class="container">
    			<div class="plan-2-title">
                <h3>ГЕНЕРАЛЬНИЙ ПЛАН</h3>
                </div>
            </div>
              <img src="<?php the_field( 'genplan_scheme' ); ?>" alt="plan-2-img" loading="lazy">
          </div>
        <?php endif ?>			
			
			<!-- Genplan scheme -->
			
            
<!--             <?php while (have_rows('umovy_prydbannya-s', 'option')):the_row(); ?>
                <div class="terms-inner">
                  <div class="terms-img">
                    <img src="<?php the_sub_field('zobrazhennya-umovy_prydbannya-s', 'option'); ?>" alt="project-img" loading="lazy">
                  </div>
                  <div class="terms-info">
                    <div class="terms-text">
                            <?php the_sub_field('opys_umovy_prydbannya-s', 'option'); ?>
                        <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                    </div>
                  </div>
                </div>
            <?php endwhile; ?>
-->           
            
            
<!--            <div class="terms-inner">
              <div class="terms-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/content-img3.jpg" alt="project-img" loading="lazy">
              </div>
              <div class="terms-info">
                <div class="terms-text">
                    <h2>Умови придбання</h2>
                    <p>ЖК Millennium Park – нова сторінка вже відомого та успішного проєкту ЖК Millennium від девелоперської компанії R-Building. Цей житловий комплекс класу комфорт-плюс поєднує в собі вишукану англійську класику, європейський комфорт і затишок.</p>
                    <p>У нашому ЖК перші поверхи в кожному будинку є комерційними приміщеннями, площа яких = 45-100 м<sup>2</sup>. Розташування не лише вигідне, а й красиве – стильно облаштована територія комплексу та вид на мальовничий сквер, що за крок.</p>
                    <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                </div>
              </div>
            </div>


            <div class="terms-inner">
              <div class="terms-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/content-img4.jpg" alt="project-img" loading="lazy">
              </div>
              <div class="terms-info">
                <div class="terms-text">
                    <h3>Умови придбання</h3>
                    <p>ЖК Millennium Park – нова сторінка вже відомого та успішного проєкту ЖК Millennium від девелоперської компанії R-Building. Цей житловий комплекс класу комфорт-плюс поєднує в собі вишукану англійську класику, європейський комфорт і затишок.</p>
                    <p>У нашому ЖК перші поверхи в кожному будинку є комерційними приміщеннями, площа яких = 45-100 м<sup>2</sup>. Розташування не лише вигідне, а й красиве – стильно облаштована територія комплексу та вид на мальовничий сквер, що за крок.</p>
                    <button class="bingc-action-open-passive-form button-billing">Отримати консультацію</button>
                </div>
              </div>
            </div>-->
           


        </div>

        <div class="progress">
            <div class="container">
            <div class="progress-inner">
                <div class="progress-title">
                <h3>Хід будівництва</h3>
                <a href="/type/hid-budivnycztva/">Дізнатися більше</a>
                </div>
                <div class="progress-slider">
                <div class="swiper progress-swiper">
                    <div class="swiper-wrapper">
                    <?php
                            $args = array(
                                'post_type' => 'news',
                                'posts_per_page' => 7,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'types',
                                        'field' => 'id',
                                        'terms' => 6,
                                    ),
                                ),
                            );
                                
                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <div class="card-details">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="card-img">
                                                <?php echo get_the_post_thumbnail( $page->ID, 'full', array('loading' => 'lazy')); ?>
                                            </div>
                                            <div class="card-info">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="none">
                                                <path d="M11.5289 0C11.61 0.0171844 11.693 0.0322208 11.7741 0.0494052C11.9672 0.0923663 12.0316 0.173992 11.9859 0.373761C11.9236 0.635824 11.8509 0.895738 11.7554 1.14706C11.4292 2.02132 11.0719 2.88269 10.6191 3.6968C10.2369 4.38847 9.7529 5.00496 9.25852 5.61286C8.65819 6.3475 8.00386 7.02628 7.2706 7.61915C6.45009 8.28075 5.57141 8.84568 4.64704 9.33544C3.79745 9.78868 2.91462 10.1603 1.99856 10.446C1.72021 10.5319 1.55818 10.7123 1.50002 11.0174C1.38369 11.621 1.23413 12.2203 1.11988 12.8239C1.02848 13.3072 0.957859 13.7969 0.901773 14.2867C0.839456 14.828 0.797911 15.3736 0.758443 15.9192C0.73767 16.2157 0.72313 16.5121 0.733516 16.8085C0.756366 17.5324 0.781293 18.2585 0.831147 18.9802C0.9267 20.37 1.15104 21.7426 1.40862 23.1088C1.4564 23.3644 1.50833 23.6178 1.55818 23.8735C1.56234 23.8928 1.56441 23.9143 1.56857 23.9465C1.46886 23.9551 1.37123 23.9658 1.2736 23.9744C1.17389 23.983 1.07418 23.983 0.976554 23.9981C0.916314 24.0066 0.897618 23.9873 0.885155 23.9293C0.768829 23.3987 0.635886 22.8725 0.536178 22.3398C0.409466 21.6739 0.297295 21.0037 0.201742 20.3313C0.131116 19.8351 0.0895712 19.3346 0.0584126 18.8341C0.0230995 18.2756 0.00232732 17.7171 0.000250075 17.1565C-0.00390441 16.3016 0.0438716 15.4509 0.131116 14.6003C0.305604 12.9034 0.623422 11.2365 1.12611 9.61254C1.66827 7.85758 2.44724 6.22076 3.49002 4.72357C4.44555 3.35096 5.6545 2.27264 7.07118 1.4349C8.10357 0.824853 9.19828 0.384502 10.3595 0.120291C10.59 0.0687377 10.8268 0.0494052 11.0595 0.0150364C11.0844 0.0107403 11.1073 0.00429611 11.1322 0C11.2651 0 11.396 0 11.5289 0ZM10.9847 1.11054C10.9889 0.904331 10.9265 0.835593 10.7894 0.835593C10.7396 0.835593 10.6877 0.835593 10.6378 0.850629C10.5007 0.889294 10.3636 0.927959 10.2286 0.975216C8.7309 1.4843 7.36199 2.24686 6.09903 3.21349C5.68982 3.5271 5.28268 3.84287 4.93785 4.23167C3.65827 5.67301 2.69651 7.31627 2.06503 9.1636C2.04218 9.23019 2.02764 9.30107 2.01725 9.36981C1.9944 9.53951 2.0858 9.63402 2.2499 9.6061C2.32676 9.59321 2.40362 9.56958 2.47632 9.53951C3.73721 9.02612 4.91708 8.35808 6.02633 7.55685C6.52487 7.19598 7.01717 6.82651 7.44716 6.38187C8.50448 5.28636 9.41431 4.07271 10.1829 2.74521C10.4322 2.3156 10.6544 1.86881 10.8788 1.42631C10.9369 1.31246 10.9619 1.18143 10.9847 1.11484V1.11054Z" fill="#123E3C"/>
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <p><?php the_title(); ?></p>
                                            </div>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'Нет постов для отображения.';
                            endif;
                            ?>






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
                <div class="mob-link">
                <a href="/type/hid-budivnycztva/">Дізнатися більше</a>
                </div>
            </div>
            </div>
        </div>
    </main>

<?php get_footer();