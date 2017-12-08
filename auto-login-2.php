/**
 * Perform GB Auto login.
 */
function gb_custom_login() {
    $creds = array(
        'user_login'    => 'admin',
        'user_password' => 'admin@123',
        'remember'      => true
    );
 
    $user = wp_signon( $creds, false );
 
    if ( is_wp_error( $user ) ) {
        echo $user->get_error_message();
    }
}
 
add_action( 'after_setup_theme', 'gb_custom_login' );
