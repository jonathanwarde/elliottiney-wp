/**
 * my-custom-gutenblocks.js
 *
 * Example: read the PHP-localized data (gutenblockHelpers.whitelistedBlocks)
 * and unregister any core block that is not in that array.
 */

 ( function( wp ) {
    const { unregisterBlockType, getBlockTypes } = wp.blocks;

    // Safely grab the PHP-localized array. If it’s missing or empty, we bail.
    const whitelistedBlocks = Array.isArray( gutenblockHelpers?.whitelistedBlocks )
        ? gutenblockHelpers.whitelistedBlocks
        : [];

    // Don’t run anything if we have no whitelist or unregisterBlockType isn’t available.
    if ( whitelistedBlocks.length === 0 || typeof unregisterBlockType !== 'function' ) {
        return;
    }

    /**
     * Wait until Gutenberg’s DOM and JS API are fully “ready” (all core/registered blocks exist),
     * then iterate over every registered block and unregister those not in our whitelist.
     */
    wp.domReady( () => {
        getBlockTypes().forEach( ( block ) => {
            if ( whitelistedBlocks.indexOf( block.name ) === -1 ) {
                unregisterBlockType( block.name );
            }
        } );
    } );

} )( window.wp );
