<?php
get_header('sub-banner');
?>

	<!--Start Content-->
    <div class="presentation">
		<div class="presentation__content">
		<?php if(have_posts()): ?>
			<?php the_post(); ?>

			<?php
			$intro_sallon_title = carbon_get_theme_option('crb_presentation_intro_sallon_title');
			$intro_sallon_text = carbon_get_theme_option('crb_presentation__intro_sallon_text');
			$intro_sallon_img_id = carbon_get_theme_option('crb_presentation__intro_sallon_img');
			$intro_sallon_img_src = wp_get_attachment_image_src($intro_sallon_img_id, 'full');
			?>

            <div class="presentation-block">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $intro_sallon_title; ?></h2>
                    </div>

                    <div class="presentation_flex presentation_flex--img">
                        <a class="popup" href="<?php echo $intro_sallon_img_src[0]; ?>">
                            <img src="<?php echo $intro_sallon_img_src[0]; ?>" width="360" alt="">
                        </a>

                        <div class="presentation-text">
							<?php echo $intro_sallon_text; ?>
                        </div>
                    </div>

                </div>
            </div>

			<?php
				$intro_title = carbon_get_theme_option('crb_presentation_intro_title');
				$intro_text = carbon_get_theme_option('crb_presentation__intro_text');
				$intro_img_id = carbon_get_theme_option('crb_presentation__intro_img');
				$intro_img_src = wp_get_attachment_image_src($intro_img_id, 'full');
			?>

			<div class="presentation-block">
                <div class="container">
					<div class="main-title">
						<h2><?php echo $intro_title; ?></h2>
					</div>

					<div class="presentation_flex presentation_flex--img">
						<a class="popup" href="<?php echo $intro_img_src[0]; ?>">
							<img src="<?php echo $intro_img_src[0]; ?>" width="360" alt="">
						</a>

						<div class="presentation-text">
							<?php echo $intro_text; ?>
						</div>
					</div>

				</div>
			</div>

			<?php
				$birth_title = carbon_get_theme_option('crb_presentation_birth_title');
				$birth_text = carbon_get_theme_option('crb_presentation_birth_text');
			?>

			<div class="presentation-block dark-back">
                <div class="container">
					<div class="main-title">
						<h2><?php echo $birth_title; ?></h2>
					</div>

					<p><?php echo $birth_text; ?></p>
				</div>
			</div>

			<?php
			$operation_title = carbon_get_theme_option('crb_presentation_operation_title');
			$operation_text = carbon_get_theme_option('crb_presentation_operation_text');
			$operation_ids = carbon_get_theme_option('crb_presentation_operation_gallery');
			?>

            <div class="presentation-block">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $operation_title; ?></h2>
                    </div>
                    
                    <div class="presentation-gallery">
                        <?php foreach($operation_ids as $id): ?>
						   <div class="presentation-gallery__item">
							   <a class="popup" href="<?php echo wp_get_attachment_image_src($id['crb_presentation_operation_gallery__image'], 'full')[0]; ?>">
								   <img src="<?php echo wp_get_attachment_image_src($id['crb_presentation_operation_gallery__image'], 'full')[0]; ?>" alt="">
							   </a>
						   </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="presentation-text">
		                <?php echo $operation_text; ?>
                    </div>
                </div>
            </div>

			<?php
			$saloon_title = carbon_get_theme_option('crb_presentation_saloon_title');
			$saloon_text = carbon_get_theme_option('crb_presentation_saloon_text');
			$saloon_ids = carbon_get_theme_option('crb_presentation_saloon_gallery');
			?>

            <div class="presentation-block dark-back">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $saloon_title; ?></h2>
                    </div>

                    <div class="presentation-gallery">
						<?php foreach($saloon_ids as $id): ?>
                            <div class="presentation-gallery__item">
                                <a class="popup" href="<?php echo wp_get_attachment_image_src($id['crb_presentation_saloon_gallery__image'], 'full')[0]; ?>">
                                    <img src="<?php echo wp_get_attachment_image_src($id['crb_presentation_saloon_gallery__image'], 'full')[0]; ?>" alt="">
                                </a>
                            </div>
						<?php endforeach; ?>
                    </div>

                    <div class="presentation-text">
						<?php echo $saloon_text; ?>
                    </div>
                </div>
            </div>

			<?php
			$saloons_title = carbon_get_theme_option('crb_presentation_saloons_title');
			$saloons_text = carbon_get_theme_option('crb_presentation_saloons_text');
			$saloons_ids = carbon_get_theme_option('crb_presentation_saloons_gallery');
			?>

            <div class="presentation-block">
                <div class="container">
                    <div class="main-title">
                        <h2><?php echo $saloons_title; ?></h2>
                    </div>

                    <div class="presentation-gallery">
						<?php foreach($saloons_ids as $id): ?>
                            <div class="presentation-gallery__item">
                                <a class="popup" href="<?php echo wp_get_attachment_image_src($id['crb_presentation_saloons_gallery__image'], 'full')[0]; ?>">
                                    <img src="<?php echo wp_get_attachment_image_src($id['crb_presentation_saloons_gallery__image'], 'full')[0]; ?>" alt="">
                                </a>
                            </div>
						<?php endforeach; ?>
                    </div>

                    <div class="presentation-text">
						<?php echo $saloons_text; ?>
                    </div>
                </div>
            </div>
			<?php else: ?>
		<?php endif; ?>

		</div>
    </div>
	<!--End Content-->


<?php
get_footer();

