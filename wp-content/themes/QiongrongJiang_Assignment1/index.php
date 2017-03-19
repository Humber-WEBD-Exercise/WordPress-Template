<!-- output header -->
<?php get_header();  ?>

<main class="main-container">
	<div class="main-content">
	<!-- output post -->
		<?php while(have_posts()): 
			 the_post(); ?>
				<div class="post">
					<?php the_category(); ?>
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<div class="post-content">
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('hero'); ?>
						</a>
						<?php the_content(); ?>
					</div>
					<div class="meta">
						<p class="dec-line"></p>
						<p class="post-date">
							<?php the_date('Y/m/d'); ?>
						</p> 
						<p class="post-reply">
							<?php
								comments_popup_link( '0 comment', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
							?>
						</p>
					</div>
				</div>
				<!-- output comment -->
				<div class="comment-area">
					<?php comments_template(); ?>
				</div>
		<?php endwhile; ?>
	
		<!-- output previous and next page links -->
		<div class="page-navigation">
			<?php previous_posts_link('< Prev'); 
			 next_posts_link('Next >'); ?>
		</div>
	</div>

	<!-- output sidebar -->
	<?php get_sidebar(); ?> 

</main>

<!-- output footer -->
<?php get_footer(); ?>