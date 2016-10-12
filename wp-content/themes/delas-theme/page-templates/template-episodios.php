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
    <?php
        echo '<div class="episodes-container col-md-12">';
        foreach ( $episodios->data as $data ) {
            ?>
                <div class="episodes-item col-md-4">
                    <img width="100%" src="<?php echo $data->images->standard_resolution->url; ?>">
                </div>
            <?php
            //var_dump($data); // {'attribution', 'tags', 'type', 'location', 'comments:[count]', 'filter', 'created_time', 'link', 'likes:[count]', 'images:[low resolution, thumbnail, standart_resolution:[url, width, height]]'}
        }
        echo '</div>';

        // $episodios->data
    ?>
</div>

<?php echo get_footer(); ?>
