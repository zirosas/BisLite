	<?php get_header(); ?>
	
	<div class="maincontent">
		<div class="container">
			<div class="row-fluid">
				
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
							
							<?php the_content(); ?>
					<?php endwhile; ?>
					<ul class="pager">
						<li class="previous">
					    	<?php previous_post_link('%link', '&larr; Older'); ?>
					  	</li>
					  	<li class="next">
					    	<?php next_post_link('%link', 'Newer &rarr;'); ?>
					  	</li>
					</ul>

					<?php comments_template(); ?>

				<?php else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
			
			</div>

			<div class="row-fluid download">
				<div class="span9">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quo, vel, a earum blanditiis animi quibusdam minus architecto quam officiis nobis ipsa excepturi ex dolorem quis nostrum laudantium ipsam voluptate.</p>
				</div>
				<div class="span3">
					<a href="" class="btn">
						<div class="down">Download PSD</div>
					</a>
				</div>
				
			</div>
		</div>
	</div>
	<?php get_footer(); ?>

