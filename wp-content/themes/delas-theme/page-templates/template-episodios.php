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
                    <figure <?php echo ( !empty($data->videos) ) ? 'class="has-video"' : ''; ?>>
                        <div class="support-div"></div> 
                        <img width="98%" src="<?php echo $data->images->standard_resolution->url; ?>">
                    <?php
                        if ( !empty($data->videos) ) {
                    ?>
                        <video src="<?php echo $data->videos->low_resolution->url; ?>" autobuffer autoloop loop poster="<?php echo $data->images->standard_resolution->url; ?>"></video>
                        <div class="control-panel"></div>
                    <?php
                        } 
                    ?>
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

<script>
    jQuery(document).ready(function($) {
        $('figure.has-video').click(function() {
            var $this = $(this);
            $this.children('img').fadeOut('400', function() {
                $this.children('.control-panel').fadeOut('400');
                $this.children('video').fadeIn('400', function() {
                    $(this).get(0).play();
                });
            });
        });
    });
</script>

<?php echo get_footer(); ?>
