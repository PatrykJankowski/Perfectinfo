<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-size-24 font-size-44-lg font-weight-300 mb-20 color-primary bottom-line">Skontaktuj się z nami</h2>
                <p class="font-size-20 font-weight-300 letter-spacing color-grey mb-20">Odpowiemy w ciągu 24h</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="font-size-20 font-weight-400 mb-20"><?php echo get_field('contact_col1_header', 2) ?></h4>
                        <?php echo get_field('contact_col1_text', 2) ?>
                        <a href="tel:+48732080876" class="button button--outline button--200 mt-35 mb-20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.942 53.942" style="margin-right: 10px" height="30" fill="#029ddd"><path d="M53.364 40.908c-2.008-3.796-8.981-7.912-9.288-8.092-.896-.51-1.831-.78-2.706-.78-1.301 0-2.366.596-3.011 1.68-1.02 1.22-2.285 2.646-2.592 2.867-2.376 1.612-4.236 1.429-6.294-.629L17.987 24.467c-2.045-2.045-2.233-3.928-.632-6.291.224-.309 1.65-1.575 2.87-2.596.778-.463 1.312-1.151 1.546-1.995.311-1.123.082-2.444-.652-3.731-.173-.296-4.291-7.27-8.085-9.277a4.947 4.947 0 0 0-2.306-.573 4.908 4.908 0 0 0-3.49 1.445L4.7 3.986C.686 7.999-.767 12.548.379 17.506c.956 4.132 3.742 8.529 8.282 13.068l14.705 14.705c5.746 5.746 11.224 8.66 16.282 8.66h.001c3.72 0 7.188-1.581 10.305-4.698l2.537-2.537a4.908 4.908 0 0 0 .873-5.796z"></path></svg>
                            Zadzwoń
                        </a>
                        <a href="mailto:kontakt@perfectinfo.pl" class="button button--outline button--200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="margin-right: 10px" height="30" fill="#029ddd"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10c1.466 0 2.961-.371 4.442-1.104l-.885-1.793C14.353 19.698 13.156 20 12 20c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8v1c0 .692-.313 2-1.5 2-1.396 0-1.494-1.819-1.5-2V8h-2v.025A4.954 4.954 0 0 0 12 7c-2.757 0-5 2.243-5 5s2.243 5 5 5c1.45 0 2.748-.631 3.662-1.621.524.89 1.408 1.621 2.838 1.621 2.273 0 3.5-2.061 3.5-4v-1c0-5.514-4.486-10-10-10zm0 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z"/></svg>
                            Napisz e-mail
                        </a>
                    </div>
                    <div class="col-md-6 mt-35 mt-0-md">
                        <h4 class="font-size-20 font-weight-400 mb-20"><?php echo get_field('contact_col2_header', 2) ?></h4>
                        <?php echo get_field('contact_col2_text', 2) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://www.perfectinfo.pl/wp-content/uploads/2021/09/perfectinfo-contact.webp">
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[contact-form-7 id="81" title="Formularz 1"]'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>


