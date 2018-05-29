<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

if ( ! function_exists( 'llorix_one_lite_post_date_box_function' ) ) {
    /**
     * Function to create the box with the post date
     */
    function llorix_one_lite_post_date_box_function( $class ) {
        ?>
        <div class="post-date">
            Postée le
            <span class="post-date-day"><?php the_time( 'd' ); ?></span>
            <span class="post-date-month"><?php the_time( 'M' ); ?></span>
        </div>
        <?php
    }
}
add_action( 'llorix_one_lite_post_date_box', 'llorix_one_lite_post_date_box_function', 10, 1 );