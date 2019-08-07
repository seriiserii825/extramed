<?php 
/*
* Template Name: Tarife
*/
get_header('sub-banner');
 ?>

    <!--Start Content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <?php if(have_posts()): ?>
					<?php the_post(); ?>
                    <div class="tarif-container">
	                    <?php the_content(); ?>

                    </div>

                    <?php else: ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!--End Content-->

 <?php  get_footer(); ?>