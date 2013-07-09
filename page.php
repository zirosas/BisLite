	<?php get_header(); ?>
	
	<div class="maincontent">
		<div class="container">
				
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<h2>Not Found</h2>
			<?php endif; ?>
			
		</div>
	</div>
		
	<div class="topcontent">
		<div class="container">
			<div class="row-fluid">
				<div class="span3">
					<div class="icontile pencil"><a href="/">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ullam excepturi deleniti molestiae asperiores deserunt obcaecati perferendis illo dolore. Sapiente minima sequi architecto dolore doloribus consectetur expedita eveniet commodi eius.</p>
				</div>
				<div class="span3">
					<div class="icontile air"><a href="">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, adipisci, nisi autem illum laboriosam omnis odio molestias laborum voluptatem ad repellendus libero doloribus! Provident molestiae at nesciunt fuga magnam eum.</p>
				</div>
				<div class="span3">
					<div class="icontile square"><a href="">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis, veritatis tenetur quod earum minus aspernatur ab delectus est quis culpa fugit architecto ratione debitis voluptate odit voluptatem provident deleniti!</p>
				</div>
				<div class="span3">
					<div class="icontile three"><a href="">Clean Theme</a></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex repellat earum consequatur officiis? Natus, asperiores, maxime itaque ex expedita veniam ipsa cupiditate obcaecati a eius dolorum iusto sequi aperiam provident.</p>
				</div>
			</div>
		</div>
	</div>
		
	<?php get_footer(); ?>

