<?php

// remove a barra do menu no admin no front-end
show_admin_bar( false );

// adicona as tags de css e os scripts js
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'fontawrsome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
  wp_enqueue_style( 'mobile', get_template_directory_uri() . '/css/mobile.css', array(), '1.1', 'all');
  // wp_enqueue_style( '1200', get_template_directory_uri() . '/css/1200.css', array(), '1.1', 'all');
  // wp_enqueue_style( '1024', get_template_directory_uri() . '/css/1024.css', array(), '1.1', 'all');

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// registra o menu primário
register_nav_menu( 'primary-menu', 'Primary Menu' );

function get_token( $client_id, $client_secret ) {
    $code = $_GET['code'];
    $_SESSION['autho_code'] = 'used';

    global $wp;
    $redirect_url = home_url(add_query_arg(array(),$wp->request));

    $fields = array(
           'client_id'     => $client_id,
           'client_secret' => $client_secret,
           'grant_type'    => 'authorization_code',
           'redirect_uri'  => $redirect_url,
           'code'          => $code
    );

    $url = 'https://api.instagram.com/oauth/access_token';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch,CURLOPT_POST, true); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
    $result = curl_exec($ch);
    curl_close($ch); 

    $result = json_decode($result);

    return $result->access_token; //your token
}

function get_insta_posts() {
    $client_id = "b371224661e14e0b8e80c53e0ad19525";
    $client_secret = "30895aaf472d444194a27ff2a164b84b";
    // $token = '31520384.b371224.9d8ee2fd2cfa4b62a5a054729dd0084f';
    $token = get_token( $client_id, $client_secret );

    // $insta_user = "1173194129"; //bealpriscila
    // $insta_user = "31520384"; //hugo_cica
    $insta_user = '3313496882'; // aseridelas

    // $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $token;
    $url = 'https://api.instagram.com/v1/users/'. $insta_user .'/media/recent/?access_token=' . $token;

    $process = curl_init();
    curl_setopt($process, CURLOPT_URL, $url);
    curl_setopt($process, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($process, CURLOPT_HEADER, 0);
    curl_setopt($process, CURLOPT_TIMEOUT, 30);
    curl_setopt($process, CURLOPT_POST, 1);
    curl_setopt($process, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
    $return = curl_exec($process);
    $error = curl_error($process);
    curl_close($process);
    
    $response = json_decode($return);
    
    return $response;
}

include_once get_template_directory().'/metaboxes/setup.php';
include_once get_template_directory().'/metaboxes/delas-spec.php';

?>
