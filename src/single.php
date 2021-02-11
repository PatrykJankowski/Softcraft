<?php get_header(); ?>

<section class="subpage">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/aktualnosci" class="subpage-top__back">← Wróć do listy aktualności</a>
                <div class="subpage-top__container">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section news">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <?php if ( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <div>
                        <time class="news__date"><?php echo get_the_date(); ?></time>
                        <h3 class="news__header"><?php the_title(); ?></h3>
                        <div class="news__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>


