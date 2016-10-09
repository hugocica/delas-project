<?php
/**
 * Template Name: Episódios
 *
 * @package WordPress
 * @subpackage Delas
 * @since Delas Project 1.0
 */
 ?>
<?php echo get_header(); ?>
<?php
    // $episodios = get_insta_posts( '1173194129' );
?>

<div class="container">
    <?php
    $insta_token = '808c80f73b5b474486b039875a6f2ec2';
    // $insta_user = '1173194129'; //bealpriscila
    // $insta_user = '31520384'; //hugo_cica
    $insta_url = 'https://api.instagram.com/v1/users/self/media/recent?access_token='. $insta_token;
    // $insta_url = 'https://api.instagram.com/v1/users/<user-id>/media/recent/';

    $process = curl_init();
    curl_setopt($process, CURLOPT_URL, $insta_url);
    curl_setopt($process, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($process, CURLOPT_HEADER, 1);
    curl_setopt($process, CURLOPT_TIMEOUT, 30);
    curl_setopt($process, CURLOPT_POST, 1);
    curl_setopt($process, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
    $return = curl_exec($process);
    curl_close($process);

    echo '<pre>';
    var_dump($return);
    echo '</pre>';
    ?>
</div>

<?php echo get_footer(); ?>
