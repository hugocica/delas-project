<div class="my_meta_control">
    <p>
        <?php $mb->the_field('show_slider'); ?>
        <label for="<?php $mb->the_name(); ?>" style="display: inline-block;vertical-align: middle;margin-bottom: 12px;">Mostrar slider</label>
        <input type="checkbox" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>"  style="display: inline-block;vertical-align: middle;" value="Sim" <?php echo ($mb->get_the_value() == 'Sim')?'checked="checked"':''; ?>>
    </p>
    <p>
        <?php $mb->the_field('slider'); ?>
        <label for="<?php $mb->the_name(); ?>" style="display: inline-block;vertical-align: middle;margin-bottom: 12px;">Selecione o slider</label>
        <select name="<?php $mb->the_name(); ?>">
            <?php
                global $wpdb;

                $results = $wpdb->get_results( "SELECT alias, title FROM wp_revslider_sliders" );

                if ( count($results) > 0 ) {
                    echo '<option value="">Selecione um slider</option>';
                    foreach ($results as $slider) { ?>
                        <option value="<?php echo $slider->alias; ?>" <?php echo ( $mb->get_the_value() == $slider->alias )?'selected="selected"':''; ?>><?php echo $slider->title; ?></option>
                    <?php
                    }
                }
            ?>
        </select>
    </p>
</div>
