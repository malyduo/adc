<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;
?>
<!--    <section class="section section-hero">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col">-->
<!--                    <h1 class="section-hero__title">Lorem Ipsum 2</h1>-->
<!--                    <p class="section-hero__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do-->
<!--                        eiusmod tempor incididunt ut labore-->
<!--                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi-->
<!--                        ut-->
<!--                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse-->
<!--                        cillum dolore eu fugiat nulla pariatur.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<?php
get_footer();