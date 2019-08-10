<?php
get_header('sub-banner');
?>
	<!--Start Content-->
    <div class="certificates">
		<div class="content">
			<div class="container">
				<div class="row">
					<h1>Certificate</h1>
                    <?php
                    $img_collection = carbon_get_the_post_meta('crb_slider');
                    ?>

                    <div class="certificates-gallery" id="js-certificates-gallery">
						<?php foreach($img_collection as $image): ?>
							<?php
								$image_id = (int)$image['photo'];
								$image_url = wp_get_attachment_image_src($image_id, 'full');
							?>
                            <a class="certificates-gallery__item" href="<?php echo $image_url[0]; ?>">
								<img src="<?php echo $image_url[0]; ?>">
							</a>

						<?php endforeach; ?>
					</div>

				</div>
			</div>
		</div>
		<!--End Content-->
	</div>


<?php
get_footer();

