<?php
/* Skip to Main Content - Accessibility Link
 *
 */

// add markup for the link
add_action( 'genesis_after_header', 'add_body_landig', 5 );



function add_body_landig() {
	if(is_singular( 'landing' ))
    require(CHILD_DIR.'/landing-body.php');
}
