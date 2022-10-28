<?php get_header(); ?>

<div class="main-content">
    <div class="container">

        <div class="wlatest">
            <div class="wtopics" id="portfolio">
                <div class="block-title">
                    <?php single_term_title('<h1 class="yellow"><span class="white">#</span>', '</h1>'); ?>
                </div>
                <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            </div>
            <div class="wposts">
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <article class="npost">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="imgpost"><?php the_post_thumbnail('post_thumb'); ?></div>
                                <div class="textpost">
                                    <h3 class="yellow"><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <span class="mons-up">ЧИТАТЬ ДАЛЕЕ ></span>
                                </div>
                            </a>
                        </article>
                    <?php } ?>

                    <?php the_posts_pagination(); ?>

                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<nav class="yoast-breadcrumbs">', '</nav>');
                    }
                    ?>

                <?php } ?>
            </div>
        </div>


    </div>
</div>

</body>
<?php get_footer(); ?>