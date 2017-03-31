<?php

/**

 * Template Name: Product Page

 * 

 */

get_header();

?>

<section class="popular-courses">

    <div class="container">

        <h2 class="section-title">Our Products</h2>

        <?php

        $qry = new WP_Query(array(

            'post_type' => 'products',

            'posts_per_page' => -1,

            'ignore_sticky_posts' => true

                ));



        if ($posts && $qry->have_posts()) {

            ?>

            <div class="row">

        <?php while ($qry->have_posts()) {

        $qry->the_post(); ?>



                    <div class="col-3">

                        <article class="post">

                            <?php if (has_post_thumbnail()) { ?>

                                <a href="javascript:;" class="post-thumbnail">

                                    <?php the_post_thumbnail('rara-academic-courses-blog'); ?>

                                </a>

                            <?php } ?>

                            <header class="entry-header">

                                <h3 class="entry-title">

                                    <a href="javascript:;"><?php the_title(); ?></a>

                                </h3>

                            </header>



                            <div class="entry-content">

                                <?php the_excerpt(); ?>

                            </div>	

                        </article>

                    </div>

            <?php }

            wp_reset_postdata();

            ?>

        </div>

    <?php } ?>

    </div>



</section>

<?php

get_footer();

