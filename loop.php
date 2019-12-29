<?php
	$i = 1;
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$querynot = new WP_Query(
			array( 'post__not_in' => get_option( 'sticky_posts' ),
				 'paged' => $paged
			) );
if (have_posts()): while ($querynot->have_posts()) : $querynot->the_post();


echo '<li class="tnews'.$i.' post">';
?>
<a href="<?php the_permalink(); ?>">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<?php the_post_thumbnail( 'large' );  ?>
				<?php endif; ?></a>
				<!-- /post thumbnail -->
				<span class="bounce-title"><?php the_title(); ?></span>
				<?php echo '<footer class="news'.$i.'">';?>
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					</footer>
	</li>
<?php $i++; ?>
<?php endwhile; ?>
<?php endif; ?>
<!-- pagination-->
	<div class="mas pag">
<?php next_posts_link('<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>') ?>
	</div>
	<div class="menos pag">
<?php previous_posts_link('<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>') ?>
	</div>