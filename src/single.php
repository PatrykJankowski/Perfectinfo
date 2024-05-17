<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <article class="article-details">
                    <?php if (has_post_thumbnail()) { 
                        the_post_thumbnail('full', array('class' => 'h-auto')); 
                    } ?>

                    <div class="mb-20">
                        <?php foreach (get_the_category() as $key => $category) { ?>
                        <a class="" href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name; ?></a><?php if (true) { ?>, <?php } ?>
                        <?php } ?>
                    </div>

                    <h1 class="font-size-36 mb-20"><?php the_title(); ?></h1>
                    <time class="d-block font-size-14 color-grey mb-20"><?php echo get_the_date(); ?></time>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
            <div class="col-lg-3">
                <h4 class="uppercase font-weight-400 mt-70 mb-20">Kategorie</h4>

                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ));
                ?>
                <?php foreach($categories as $category) { ?>
                    <a class="category-link" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="row mt-70">
            <div class="col">
                <h4 class="font-size-18 mb-20">Zobacz inne artykuły:</h4>
                <?php previous_post_link(); ?> | <?php next_post_link(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
