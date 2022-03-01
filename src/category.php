<?php get_header(); ?>

<?php
global $wp_query;
$paged = get_query_var('paged', 1);

$args = array(
    'cat' => get_query_var('cat'),
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<section class="section">
    <div class="container">

        <div class="text-align-center mb-35"><?php the_posts_pagination(); ?></div>

        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="img-h-240 d-flex mb-35" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                </div>
                <div class="col-lg-6">
                    <article>
                        <a class="color-black" href="<?php echo the_permalink(); ?>">
                            <h2 class="font-size-24 font-weight-400 mb-20"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h2>
                        </a>
                        <div class="font-size-14 color-grey mb-20"><?php echo apply_filters('the_date', mysql2date('d.m.Y', $posts->post->post_date)); ?></div>
                        <div class="line-height-26 mb-20"><?php echo wp_trim_words(wp_strip_all_tags(apply_filters('the_content', $posts->post->post_content)), 30, '...'); ?></div>
                        <a class="color-primary d-block" href="<?php echo the_permalink(); ?>" rel="nofollow">Czytaj więcej...</a>
                    </article>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
