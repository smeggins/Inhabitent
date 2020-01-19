<?php get_header() ?>

<div class=front-page-container>

    <?php while ( have_posts() ) : the_post(); ?>

        <div class='posts-container home-hero' id="hero-image-id">
            <?php the_content() ?>
        </div>
        <h2> SHOP STUFF </h2>

        <article class="product-taxonomies">
            <?php 
                $args = array( 'taxonomy' => 'Product_taxonomy', 'hide_empty' => false );
                $terms = get_terms( $args ); 
                
                    if ( $terms ) {
                        echo '<div class="taxonomy-mini-post-container">';
                            $i = 0;
                            $taxonomi_mini_post_logo = array('http://localhost/InhabitentSite/wp-content/uploads/2020/01/do.svg', 'http://localhost/InhabitentSite/wp-content/uploads/2020/01/eat.svg', 'http://localhost/InhabitentSite/wp-content/uploads/2020/01/sleep.svg', 'http://localhost/InhabitentSite/wp-content/uploads/2020/01/wear.svg');
                            foreach ( $terms as $term ) {
                                echo '<div class="taxonomy-mini-post">';
                                    echo '<div class="taxonomy-mini-post-logo">';
                                        echo '<img src="' . $taxonomi_mini_post_logo[$i] . '"></img>';
                                    echo '</div>';
                                    echo '<p class="taxonomy-mini-post-description">' . $term->description . '</p>';
                                    echo '<div class="taxonomy-mini-post-button-container">';
                                        echo '<a class="taxonomy-mini-post-button">' . $term->name . ' STUFF</a>';
                                    echo '</div>';
                                echo '</div>';
                                $i++;
                            };
                        echo '</div>';
                    }
            ?>
        </article>

        <h2> inhabitent journal </h2>
        <?php get_template_part( 'template-parts/content', 'front-page' ); ?>

    <?php endwhile; // End of the loop. ?>

</div>

<?php get_footer() ?>
