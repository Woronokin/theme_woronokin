<?php get_header(); ?>

<div class="main-content">
    <?php if (have_posts()) :
        while (have_posts()) :
            // url полной картинки записи
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
            <div class="post-top">
                <div class="post-head" style="background-image: url(<?php echo $featured_img_url; ?>)">
                    <div class="post-head-background-overlay"></div>
                    <div class="post-head-empty"></div>
                    <div class="post-info-container">
                        <div class="block-title">
                            <?php the_title('<h1 class="white">', '</h1>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="wtopics">
                    <div class="post-content">
                        <?php the_post();
                        the_content(); ?>
                        <span class="post-cat">
                            Рубрика: <?php the_category(', ', ''); ?>
                        </span>
                        <div class="post-tags mons-up">
                            # <?php the_tags('', ' '); ?>
                        </div>

                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-limit="4" data-services="vkontakte,telegram,viber,whatsapp,pinterest,skype,tumblr,evernote,linkedin,lj,blogger,delicious,digg,reddit,pocket,qzone,renren,sinaWeibo,surfingbird,tencentWeibo" data-image:pinterest="https://nikonorow.ru/wp-content/uploads/2020/10/nikonorow.ru-main-page-showcase-scaled.jpg"></div>

                <?php
            endwhile;
        endif; ?>
                    </div>
                </div>

                <div class="wlatest">
                    <div class="block-title">
                        <h2 class="yellow">Комментарии</h2>
                        <p><em>Оставьте Ваше сообщение</em></p>
                    </div>

                    <div class="wposts">
                        <?php if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>

                    <div class="block-title">
                        <h2 class="yellow">Смотрите далее</h2>
                        <p><em>Ознакомьтесь с другими работами</em></p>
                    </div>

                    <div class="wposts">

                        <?php
                        $args = array(
                            'numberposts' => 3,
                            'post_status' => 'publish',
                        );

                        $result = wp_get_recent_posts($args);

                        foreach ($result as $p) {
                            $cats = get_the_category($p["ID"]);
                            $cat_name = $cats[0]->name;
                        ?>
                            <article class="npost">
                                <a href="<?php echo get_permalink($p['ID']) ?>">
                                    <div class="imgpost"><?php echo get_the_post_thumbnail($p["ID"], 'post_thumb', ''); ?></div>
                                    <div class="badgepost"><?php echo $cat_name ?></div>
                                    <div class="textpost">
                                        <h3><?php echo $p['post_title'] ?></h3>
                                    </div>
                                </a>
                            </article>
                        <?php
                        }
                        ?>

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<nav class="yoast-breadcrumbs">', '</nav>');
                        }
                        ?>

                    </div>
                </div>

            </div>
</div>

</body>
<?php get_footer(); ?>