<?php
get_header('sub-banner');
?>

	<!--Start Content-->
	<div class="content">

		<div class="contact-us">
			<div class="container">

				<div class="row">
					<div class="col-md-12">

						<div class="our-location">
                            <?php if(have_posts()): ?>
                                    <?php the_post(); ?>
									<?php the_content(); ?>

                                <?php else: ?>
                            <?php endif; ?>
						</div>

					</div>
				</div>

			</div>


			<div class="leave-msg dark-back">
				<div class="container">

					<div class="rox">
						<div class="col-md-7">

							<div class="main-title">
                                <?php
                                    $title_1 = carbon_get_theme_option('crb_contacts_title_1');
									$title_2 = carbon_get_theme_option('crb_contacts_title_2');
									$title_3 = carbon_get_theme_option('crb_contacts_title_3');
                                ?>
								<h2><span><?php echo $title_1; ?></span> <?php echo $title_2; ?> <span><?php echo $title_3; ?></span></h2>
							</div>

							<div class="form">
								<div class="row">
                                    <?php echo do_shortcode('[contact-form-7 id="87" title="Contact-page-form"]'); ?>
								</div>
							</div>


						</div>

						<div class="col-md-5">

							<div class="contact-get">
								<div class="main-title">
                                    <?php
                                        $title_addres_1 = carbon_get_theme_option('crb_contacts_address_1');
										$title_addres_2 = carbon_get_theme_option('crb_contacts_address_2');
										$phone = carbon_get_theme_option('crb_phone');
										$phone_clear = str_replace(['(',')','-','+', ' '], '', $phone);
										$phone1 = carbon_get_theme_option('crb_contacts_phone_1');
										$phone_clear1 = str_replace(['(',')','-','+', ' '], '', $phone);
										$phone2 = carbon_get_theme_option('crb_contacts_phone_2');
										$phone_clear2 = str_replace(['(',')','-','+', ' '], '', $phone);
										$phone3 = carbon_get_theme_option('crb_contacts_phone_3');
										$phone_clear3 = str_replace(['(',')','-','+', ' '], '', $phone);
										$phone4 = carbon_get_theme_option('crb_contacts_phone_4');
										$phone_clear4 = str_replace(['(',')','-','+', ' '], '', $phone);
										$email = carbon_get_theme_option('crb_email');
										$address = carbon_get_theme_option('crb_address');
										$facebook = carbon_get_theme_option('crb_facebook');
										$twitter = carbon_get_theme_option('crb_twitter');
										$google = carbon_get_theme_option('crb_google');
										$vimeo = carbon_get_theme_option('crb_vimeo');
                                    ?>
									<h2><span><?php echo $title_addres_1; ?></span> <?php echo $title_addres_2; ?></h2>
								</div>

								<div class="get-in-touch">
									<div class="detail">
										<span><b>Telefon:</b> <a href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a></span>
                                        <div class="contacts-phones">
                                            <a href="tel:<?php echo $phone_clear1; ?>"><?php echo $phone1; ?></a>
                                            <a href="tel:<?php echo $phone_clear2; ?>"><?php echo $phone2; ?></a>
                                            <a href="tel:<?php echo $phone_clear3; ?>"><?php echo $phone3; ?></a>
                                            <a href="tel:<?php echo $phone_clear4; ?>"><?php echo $phone4; ?></a>
                                        </div>
										<span><b>Email:</b> <a href="<?php echo $email; ?>"><?php echo $email; ?></a></span>
										<span><b>Adresa:</b> <?php echo $address;?></span>
									</div>

									<div class="social-icons">
										<a href="<?php echo $facebook; ?>" class="fb"><i class="fab fa-facebook-f"></i></a>
										<a href="<?php echo $twitter ?>" class="tw"><i class="fab fa-twitter"></i></a>
										<a href="<?php echo $google; ?>" class="gp"><i class="fab fa-google-plus-g"></i></a>
										<a href="<?php echo $vimeo; ?>" class="vimeo"><i class="fab fa-vimeo-v"></i></a>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

		</div>


	</div>
	<!--End Content-->


<?php
get_footer();

