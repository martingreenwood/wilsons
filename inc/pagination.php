		<div class="pagination">
			<nav class="prev-next-posts container">
				<div class="prev-posts-link">
					<?php echo get_previous_posts_link( 'Previous' ); // display older posts link ?>
				</div>
				<div class="next-posts-link">
					<?php echo get_next_posts_link( 'Next', $loop->max_num_pages ); // display newer posts link ?>
				</div>
			</nav>
		</div>
