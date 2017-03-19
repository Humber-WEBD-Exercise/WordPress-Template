<!-- output header -->
<?php get_header();  ?>

<main class="main-container">
	<div class="main-content">
		<!-- output search result -->
		<p class="search-title">
			<?php echo $wp_query->found_posts; ?> 
			<?php _e( 'Search Results Found For', 'locale' ); ?>
			: "<?php the_search_query(); ?>"
		</p>
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
						<?php the_content(); ?>
					</div>
					<div class="meta">
						<p class="dec-line"></p>
						<p class="post-date">
							<?php the_date('Y/m/d'); ?>
						</p> 
						<p class="post-reply">
							<?php
								comments_popup_link( 'Leave a comment', 'Leave a comment', 'Leave a comment', 'comments-link', 'Comments are off for this post');
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
			<?php previous_posts_link('< Prev'); ?>
			<?php next_posts_link('Next >'); ?>
		</div>
	</div>
	
	<!-- output sidebar -->
	<?php get_sidebar(); ?> 
</main>

<!-- output footer -->
<?php get_footer(); ?>
