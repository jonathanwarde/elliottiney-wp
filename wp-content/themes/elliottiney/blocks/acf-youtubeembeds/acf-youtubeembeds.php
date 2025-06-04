<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

$embed        = get_field( 'youtube_embed' ); // ACF's color picker.


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'youtubeembed';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
            <?php echo $embed; ?>

            <?php if ( !empty( $quote_attribution ) ) : ?>
                <?php echo wp_kses_post( $quote_attribution ); ?>
            <?php endif; ?>

    <!--?php if ( $image ) : ?>
        <div class="testimonial__col">
            <figure class="testimonial__image">
                <!-?php echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'testimonial__img' ) ); ?>
            </figure>
        </div>
    <!?php endif; ?-->
</div>