<?php get_header(); ?>
	<div id="main">
		<div class="ndest">
		<?php
			$sticky = get_option( 'sticky_posts' );
			rsort( $sticky );
			$sticky = array_slice( $sticky, 0, 1 );
			$query = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 ) );
		?>

			<h3 class="fbup">
				<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php the_title(); ?>
			</h3>
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			<span><a href="<?php the_permalink(); ?>">+ Seguir Leyendo</a></span>
			<?php endwhile; wp_reset_query(); wp_reset_postdata(); endif; ?>
		</div>
	</div>
</header>

<section id="noticias">
	<div class="headcol">
		<h2 class="fbup"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Noticias</h2>
	</div>
	<div class="ineedflex">
		<div class="news-container">
			<ul class="post-contain">
				<?php
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$querynot = new WP_Query(
							array(
									'post__not_in' => get_option( 'sticky_posts' ),
									'posts_per_page' => 3,
									'paged' => $paged
							)
					);
				if (have_posts()): while ($querynot->have_posts()) : $querynot->the_post();	?>
				<li class="tnewspost">
					<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail()) :  ?>
							<?php the_post_thumbnail( 'large' );  ?>
					<?php endif; ?>
					</a>
					<span class="title"><?php the_title(); ?></span>
					<footer class="news-ex">
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
					</footer>
				</li>
			<?php endwhile; endif;  ?>

				<div class="mas pag">
			<?php next_posts_link('<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>', $querynot->max_num_pages) ?>
				</div>
				<div class="menos pag">
			<?php previous_posts_link('<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>') ?>
				</div>
			</ul>
		</div>
	</div>
</section>

<?php get_footer(); ?>
