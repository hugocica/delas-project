<?php
/**
 * Template Name: Personagens
 *
 * @package WordPress
 * @subpackage Delas
 * @since Delas Project 1.0
 */
 ?>

<?php echo get_header(); ?>
<?php
    $personagens = get_post_meta( get_the_ID(), '_personagens_metabox', true );
?>

<div class="container">
    <h2 class="section-title">Conheça nossas personagens</h2>

    <div class="personagens-list">
    <?php
        if ( $personagens['show'] == 'Sim' ) {
            foreach ( $personagens['locodivos'] as $personagem ) {
                ?>
                <div class="personagem-item">
                    <div class="entry-thumb">
                        <img src="<?php echo $personagem['photo']; ?>">
                    </div>
                    <div class="entry-content">
                        <h3 class="section-title"><?php echo $personagem['nome']; ?></h3>
                        <p><?php echo $personagem['descricao']; ?></p>
                    </div>
                </div>
                <?php
            }
        }
    ?>
    </div>
</div>

<?php echo get_footer(); ?>
