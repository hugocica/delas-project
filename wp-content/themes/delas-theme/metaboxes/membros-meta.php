<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
	<h4 for="<?php $mb->the_name(); ?>" style="display: inline-block;vertical-align: middle;color: #000;margin-top: 12px;">Mostrar membros?</h4>
	<?php $mb->the_field('show'); ?>
	<input type="checkbox" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>"  style="display: inline-block;vertical-align: middle;" value="Sim" <?php echo ($mb->get_the_value() == 'Sim')?'checked="checked"':''; ?>>

	<hr>
	<h4 style="color: #000;">LocomoDivos</h4>

	<?php while($mb->have_fields_and_multi('locodivos')): ?>
	<?php $mb->the_group_open(); ?>

		<div class="col-md-6">
			<?php $mb->the_field('nome'); ?>
			<label for="<?php $mb->the_name(); ?>">Nome</label>
			<p class="col-md-12"><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		</div>

		<div class="col-md-6">
			<?php $mb->the_field('photo'); ?>
			<label for="<?php $mb->the_name(); ?>">Foto 1</label>
			<?php $wpalchemy_media_access->setGroupName('img-n'. $mb->get_the_index())->setInsertButtonLabel('Inserir'); ?>
			<p>
			<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
			<?php echo $wpalchemy_media_access->getButton(); ?>
			</p>
		</div>

		<div class="col-md-12">
			<?php $mb->the_field('descricao'); ?>
			<label for="<?php $mb->the_name(); ?>">Descrição</label>
			<p>
				<?php
					$val = html_entity_decode($mb->get_the_value());
					$id = $mb->get_the_name();
			        $settings = array(
					'textarea_rows' => 6,
					'quicktags' => array(
			                        'buttons' => 'em,strong,link',
			                ),
			                'quicktags' => true,
			                'tinymce' => true
			        );

			        wp_editor($val, $id, $settings);
				?>
	    		<span>Enter in a list of the publications</span>
			</p>
		</div>

		<a href="#" class="dodelete button">Apagar membro</a>
		</p>

	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>

	<p style="margin-bottom:15px; padding-top:5px;">
		<a href="#" class="docopy-locodivos button">Adicionar membro</a>
		<a style="float:right; margin:0 10px;" href="#" class="dodelete-locodivos button">Remover Todos</a>
	</p>

</div>

<style>
	.col-md-6 {
		float: left;
		width: 50%;
	}
	.col-md-12 {
		float: left;
		clear: both;
		width: 100%;
	}
</style>
