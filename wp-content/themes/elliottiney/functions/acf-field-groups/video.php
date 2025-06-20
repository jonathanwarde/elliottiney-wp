<?php
if ( function_exists( 'acf_add_local_field_group' ) ) {

    acf_add_local_field_group( array(
        'key'      => 'group_project_video',
        'title'    => 'Project Videos',
        'fields'   => array(
            array(
                'key'        => 'field_project_videos12345',
                'label'      => 'Project Videos',
                'name'       => 'project_videos',
                'type'       => 'repeater',
                'instructions' => 'Add one or more videos for this project.',
                'collapsed'  => '',
                'min'        => 0,
                'layout'     => 'row',
                'button_label' => 'Add Video',
                'sub_fields' => array(
                    array(
                        'key'     => 'field_project_video_url6789',
                        'label'   => 'YouTube Video',
                        'name'    => 'youtube_video',
                        'type'    => 'oembed',  
                        'instructions' => 'Paste YouTube URL',
                        'required' => 0,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'project',
                ),
            ),
        ),
        'show_in_rest' => true,
    ) );

}
