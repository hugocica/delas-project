<?php echo get_header(); ?>

<?php
	$insta_token = '808c80f73b5b474486b039875a6f2ec2';
	// $insta_user = '1173194129'; //bealpriscila
	$insta_user = '31520384'; //hugo_cica
	$insta_url = 'https://api.instagram.com/v1/users/self/media/liked??access_token='. $insta_token;
	//
	// $process = curl_init();
    // curl_setopt($process, CURLOPT_URL, $insta_url);
    // curl_setopt($process, CURLOPT_SSL_VERIFYPEER, 0);
    // curl_setopt($process, CURLOPT_HEADER, 1);
    // curl_setopt($process, CURLOPT_TIMEOUT, 30);
    // curl_setopt($process, CURLOPT_POST, 1);
    // curl_setopt($process, CURLOPT_CUSTOMREQUEST, "GET");
    // curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
    // $return = curl_exec($process);
    // curl_close($process);
	//
    // echo '<pre>';
    // var_dump($return);
    // echo '</pre>';
?>

<div class="container">
	<section id="episodes-list">
		<div class="episodes-itens col-md-12">
			<div class="episodes-item col-md-4">
				<img src="https://instagram.fcgh2-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/14487180_627184524119594_6057692071223885824_n.jpg?ig_cache_key=MTM0ODY5ODc2NDAwNTA0MDY0NA%3D%3D.2">
			</div>
			<div class="episodes-item col-md-4">
				<img src="https://instagram.fcgh2-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/14482824_1023015281141241_3769746667473993728_n.jpg?ig_cache_key=MTM0ODY5ODIwMDI3MzY3NDE2Nw%3D%3D.2">
			</div>
			<div class="episodes-item col-md-4">
				<img src="https://instagram.fcgh2-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/14309788_1284308828280366_2932264384472285184_n.jpg?ig_cache_key=MTM0ODY5NzM0NjEyMDU4NzkyMQ%3D%3D.2">
			</div>
		</div>
	</section>
</div>

<?php echo get_footer(); ?>
