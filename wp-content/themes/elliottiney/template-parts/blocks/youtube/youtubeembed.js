// template-parts/blocks/youtube/youtubeembed.js
console.log( 'youtubeembed.js loaded – registering Test block' );

( function( wp ) {
    const { registerBlockType } = wp.blocks;
    const { createElement: el } = wp.element;

    registerBlockType( 'mytheme/test', {
        title: 'Test',                  // Label that appears in the inserter
        icon: 'smiley',                 // Any Dashicon slug (or SVG element)
        category: 'common',             // Choose a block category (e.g. common, formatting, layout, widgets, embed, etc.)
        description: 'A simple Test block.',

        // What shows in the editor:
        edit: function( props ) {
            return el(
                'div',
                { className: props.className + ' my-test-block' },
                'This is the Test block (editor view).'
            );
        },

        // What gets saved to post content:
        save: function() {
            return el(
                'div',
                { className: 'my-test-block' },
                'This is the Test block (front-end view).'
            );
        },
    } );
} )( window.wp );
