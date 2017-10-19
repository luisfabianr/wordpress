<?php
/* Skip to Main Content - Accessibility Link
 *
 */

// add markup for the link
add_action( 'genesis_after_header', 'add_body_landing', 5 );



function add_body_landing() {
	if(is_page_template('landing.php'))
    require(CHILD_DIR.'/landing-body.php');
}

