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
    <h2 class="section-title"><?php echo $personagens['title']; ?></h2>

    <div class="personagens-list">
    <?php
        if ( $personagens['show'] == 'Sim' ) {
            $aux = 0;
            foreach ( $personagens['locodivos'] as $personagem ) {
                $extension = explode(".", strtolower($personagem['nome']));
                $right_class = ( $aux%2 != 0 ) ? 'pull-right' : '' ;
                $aux++;
                ?>
                <div class="personagem-item col-md-12">
                    <div class="entry-thumb <?php echo $right_class; ?> col-md-6" style="background-image: url(<?php echo $personagem['photo']; ?>)">
                    </div>
                    <div class="entry-content col-md-6">
                        <?php if ( count($extension) == 1 ) { ?>
                            <h3 class="section-title"><?php echo $personagem['nome']; ?></h3>
                        <?php } else { ?>
                            <img src="<?php echo $personagem['nome']; ?>">
                        <?php } ?>
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
