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
    $episodios = get_insta_posts();
?>

<div class="container">
    <div class="episodes-container col-md-12">
    <?php
        foreach ( $episodios->data as $data ) {
            // echo '<pre>';
            // var_dump($data);
            // echo '</pre>';
            // die();
            ?>
                <div class="episodes-item col-md-4">
                    <div class="author-info">
                        <div class="support-div"></div>
                        <img src="<?php echo $data->user->profile_picture; ?>">
                        <p><?php echo $data->user->username; ?></p>
                    </div>
                    <figure>
                        <div class="support-div"></div>
                        <img width="98%" src="<?php echo $data->images->standard_resolution->url; ?>">
                    </figure>
                    <div class="like-info">
                        <div class="support-div"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/like_filled.svg">
                        <p class="count"><?php echo $data->likes->count; ?></p>
                    </div>
                </div>
            <?php
        }
    ?>
    </div> 
</div>

<?php echo get_footer(); ?>
