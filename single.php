<?php
get_header('sub-banner');

$category_parrent = get_the_category_by_ID(6);
$categories = get_categories( array(
	'taxonomy'     => 'category',
	'type'         => 'post',
	'child_of'     => 6,
	'parent'       => '',
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'pad_counts'   => false,
) );

?>
<!--Start Content-->
<div class="content">
    <div class="container">
		<div class="procedures">
            <div class="procedures__item procedures__item--first">
				<div class="procedures-links">
						<span class="title"><?php echo $category_parrent; ?></span>
						<ul id="procedures-links" class="accordion">
							<?php $i = 0; foreach($categories as $cat): ?>
								<?php $cat_id = $cat->term_id; ?>
								<li <?php if($i === 0) echo 'class="open"'; ?>>
									<div class="link"><?php echo $cat->name;?> <i class="icon-chevron-down"></i></div>

									<?php 
										$posts_of_cat = new WP_Query([
											'posts_per_page' => -1,
											'cat' => $cat_id
										]);
									?>

									<ul class="submenu" <?php if($i === 0) echo 'style="display: block"'; ?> >
										<?php if ( $posts_of_cat->have_posts() ) : ?> 
											<?php while ( $posts_of_cat->have_posts() ) : $posts_of_cat->the_post(); ?>
												<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endwhile; ?>
											<?php else : ?>
										<?php endif; ?>
									</ul>
								</li>
							<?php $i++; endforeach; ?>
						</ul>
					</div>
			</div>

            <div class="procdures__item procedures__item--second">
				<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="main-title">
								<h2><?php the_title(); ?></h2>
							</div>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php else : ?>
					<?php endif; ?>
			</div>
			</div>
		</div>
	</div>
</div>
<!--End Content-->
<?php
get_footer();