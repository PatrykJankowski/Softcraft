<?php get_header(); ?>

<?php global $post; $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

<section class="section section--main--secondary section--project section--news" style="background: url('<?php echo $url; ?>') center; background-size: cover">
    <div class="hero-bg-secondary hero-bg-multiply hero-bg-multiply-secondary hero-bg-news"></div>
</section>

<section class="section news news--details">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <div>
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


