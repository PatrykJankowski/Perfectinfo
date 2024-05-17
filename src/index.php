<?php get_header(); ?>


<section class="section">
    <div class="container">
        <h3 class="font-size-24 font-weight-400 mb-20"><?php echo get_field('blog_intro_header', 24); ?></h3>
        <p><?php echo get_field('blog_intro_description', 24); ?></p>
    </div>
</section>


<?php
global $wp_query;
$paged = get_query_var('paged', 1);

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<section class="section pt-0">
    <div class="container">

        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>" class="img-h-240 mb-35 d-flex" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                </div>
                <div class="col-lg-6">
                    <article>
                        <a href="<?php echo the_permalink(); ?>"><h2 class="font-size-24 font-weight-400 mb-20 color-black"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h2></a>
                        <div class="font-size-14 color-grey mb-20"><?php echo apply_filters('the_date', mysql2date('d.m.Y', $posts->post->post_date)); ?></div>
                        <div class="line-height-26 mb-20"><?php echo wp_trim_words(wp_strip_all_tags(apply_filters('the_content', $posts->post->post_content)), 30, '...'); ?></div>
                        <a class="color-primary d-block" href="<?php echo the_permalink(); ?>" rel="nofollow">Czytaj więcej...</a>
                    </article>
                </div>
            </div>
        <?php endwhile; ?>

        <div class="row">
            <div class="col">
                <div class="text-align-center mt-70"><?php the_posts_pagination(); ?></div>
            </div>
        </div>

    </div>
</section>

<?php wp_reset_query(); ?>

<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>

<section class="section">
    <div class="container">
        <h4 class="font-size-24 font-weight-400">Zobacz kategorie:</h4>
        <div class="row">
            <?php foreach( $categories as $category ) { ?>
                <div class="col-lg-6">
                    <div class="row mt-35">
                        <div class="col-lg-5">
                            <img class="img-h-240" src="<?php echo get_field('category_image', $category->taxonomy . '_' . $category->term_id) ?>">
                        </div>
                        <div class="col-lg-7 d-flex flex-column justify-content-center">
                            <a class="color-black" href="<?php echo get_category_link($category->term_id) ?>">
                                <h3 class="mb-20 mt-20 mt-0-lg"><?php echo $category->name ?></h3>
                            </a>
                            <p><?php echo $category->description ?></p>
                            <a class="color-primary" href="<?php echo get_category_link($category->term_id) ?>" rel="nofollow">Zobacz więcej...</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php wp_reset_query(); ?>

<section class="section pt-0">
    <div class="container">
        <h3 class="font-size-24 font-weight-400 mb-20"><?php echo get_field('blog_outro_header', 24); ?></h3>
        <p><?php echo get_field('blog_outro_description', 24); ?></p>
    </div>
</section>

<?php get_footer(); ?>
