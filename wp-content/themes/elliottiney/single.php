<?php
/**
 * single.php
 */

get_header(); ?>

<main id="main-content" role="main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php
                            echo esc_html( get_the_date() ); 
                            ?>
                        </span>
                        <span class="byline">
                            <?php
                            printf(
                                esc_html__( ' by %s', 'your-theme-textdomain' ),
                                '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
                            );
                            ?>
                        </span>
                    </div><!-- .entry-meta -->

                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
                </div><!-- .entry-content -->

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        endwhile;
    else : ?>

        <p><?php esc_html_e( 'Sorry, no content found.', 'your-theme-textdomain' ); ?></p>

    <?php endif; ?>
</main>

<?php
get_footer(); 
