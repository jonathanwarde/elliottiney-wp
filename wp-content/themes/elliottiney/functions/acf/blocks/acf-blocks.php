<?php

function jw_register_acf_blocks() {
    $block_folder = get_template_directory() . '/blocks/acf-youtubeembeds';

    register_block_type($block_folder);
}
add_action('init', 'jw_register_acf_blocks');

