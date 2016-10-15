<?php echo get_header(); ?>

<div class="main-banner">
	<?php echo do_shortcode('[rev_slider alias="main"]'); ?>
</div>

<div class="container">
	<section id="episodes-list">
		<h2 class="section-title">Últimos episódios</h2>
		<div class="episodes-container col-md-12">

			<?php
				$episodios = get_insta_posts();

		        for ( $aux = 0; $aux < 3; $aux++ ) {
		        	$data = $episodios->data[$aux];
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
	</section>
</div>

<section id="highlight">
	<div class="container">
		<blockquote>
			<p class="quote"><span class="quotes">&#8220;</span> Chapado mas sempre ligado <span class="quotes">&#8221;</span></p>
			<p class="author">Hugo Cicarelli</p>
		</blockquote>
	</div>
</section>

<div class="container">
	<section class="social">
		<div class="fb-page" data-href="https://www.facebook.com/seriedelas/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/seriedelas/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/seriedelas/">Série Delas</a></blockquote></div>	
	</section>
</div>

<?php echo get_footer(); ?>
