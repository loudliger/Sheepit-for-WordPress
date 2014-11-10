<?php
/**
 * Plugin Name: Sheepit! for WordPress (Basic)
 * Plugin URI: N/A
 * Description: Testing Sheepit JQuery plugin for WordPress
 * Version: 0.0.1
 * Author: Andrew Fraser
 * Author URI: http://www.loudliger.com
 * License: GPL2
 */
// Register Script
function sheepit_scripts() {

	wp_register_script( 'sheepit', '/wp-content/plugins/sheepit/js/jquery.sheepItPlugin.js', array( 'jquery' ), false, false );
	wp_enqueue_script( 'sheepit' );

	wp_enqueue_script( 'custom_sheepit', '/wp-content/plugins/sheepit/js/custom.js', array( ' jquery' ), false, false);
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'sheepit_scripts' );

// Insert custom javascript for your form. Edit this to suit your needs. 
// See jQuery plugin source for examples: http://www.mdelrosso.com/sheepit/index.php?lng=en_GB

function insert_function() {
    echo "
<script>
jQuery(document).ready(function() {
     
    var sheepItForm = jQuery('#sheepItForm').sheepIt({
        separator: '',
        allowRemoveLast: true,
        allowRemoveCurrent: true,
        allowRemoveAll: true,
        allowAdd: true,
        allowAddN: true,
        maxFormsCount: 10,
        minFormsCount: 0,
        iniFormsCount: 2
    });
 
});
</script>
";
}
add_action('wp_print_footer_scripts', 'insert_function');
?>
