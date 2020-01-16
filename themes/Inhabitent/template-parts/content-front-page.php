
<article class="mini-post-container">
    <?php  
        $args = array('numberposts' => 3, 'category' => 'journal');
        $product_posts = get_posts( $args );
    ?>
    <?php 
        foreach ( $product_posts as $post ) : setup_postdata( $post ); 
    ?>
            <div class="mini-post"> 
                <div class=mini-post-thumbnail>
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
                <div class="mini-post-content">
                    <div class="mini-post-comment-date">
                        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                    </div>
                    <div class="mini-post-title">
                        <?php the_title() ?>
                    </div>
                </div>
            </div>
    <?php endforeach; wp_reset_postdata(); ?>
    
</article>